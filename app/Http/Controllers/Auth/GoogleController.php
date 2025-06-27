<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

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
            
            // Check if user already exists with this email
            $user = User::where('email', $googleUser->email)->first();

            if ($user) {
                // Update Google ID if not set
                if (!$user->google_id) {
                    $user->google_id = $googleUser->id;
                    $user->save();
                }
            } else {
                // Create new user
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'email_verified_at' => now(),
                    'password' => null, // No password for Google users
                ]);
            }

            Auth::login($user);

            return redirect()->intended('/')->with('success', 'Successfully logged in with Google!');

        } catch (Exception $e) {
            return redirect('/login')->withErrors(['error' => 'Something went wrong with Google authentication.']);
        }
    }
}
