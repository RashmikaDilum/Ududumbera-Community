<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProviderCallbackController extends Controller
{
    //handle the income request
    public function __invoke(string $provider)
    {
        if (!in_array($provider, ['google'])) {
            return redirect()->route('login')->with('provider', 'Invalid provider');
        }

        $googleuser = Socialite::driver($provider)->user();
 
        // Split name from provider into first and last name
        $nameParts = explode(' ', $googleuser->name, 2);
        $firstName = $nameParts[0];
        $lastName = $nameParts[1] ?? '';

        $user = User::updateOrCreate([
            'provider_id' => $googleuser->id,
            'provider_name' => $provider,
        ], [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $googleuser->email,
            'provider_token' => $googleuser->token,
            'provider_refresh_token' => $googleuser->refreshToken,
            'email_verified_at' => now(),
        ]);
     
        Auth::login($user);
     
        return redirect('/');
    }
}
