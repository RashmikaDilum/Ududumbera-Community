<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class ProviderRedirectController extends Controller
{
    //handle the income request
    public function __invoke(string $provider)
    {
        if (!in_array($provider, ['google'])) {
            return redirect()->route('login')->with('provider', 'Invalid provider');
        }

        try {
            return Socialite::driver($provider)->redirect();
        } catch (\Exception $e) {
            return redirect()->route('login')->with('provider', 'Something went wrong with ' . $provider . ' authentication.');
        }
    }
}
