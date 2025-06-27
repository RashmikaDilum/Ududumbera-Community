<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->email)->first();

            // Split name from Google into first and last name
            $nameParts = explode(' ', $googleUser->name, 2);
            $firstName = $nameParts[0];
            $lastName = $nameParts[1] ?? '';

            if ($user) {
                // User exists, let's update their info if needed
                $updateData = [];
                if (!$user->google_id) {
                    $updateData['google_id'] = $googleUser->id;
                }
                // If first_name is missing, populate it from Google
                if (empty($user->first_name)) {
                    $updateData['first_name'] = $firstName;
                    $updateData['last_name'] = $lastName;
                }
                if (!empty($updateData)) {
                    $user->update($updateData);
                }
            } else {
                // Create new user
                $user = User::create([
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'email_verified_at' => now(),
                    'password' => Hash::make(Str::random(16)), // Random password
                ]);
            }

            Auth::login($user);

            return redirect()->intended('/')->with('success', 'Successfully logged in with Google!');

        } catch (Exception $e) {
            return redirect('/login')->withErrors(['error' => 'Something went wrong with Google authentication.']);
        }
    }
}
