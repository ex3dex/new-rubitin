<?php

// FacebookloginController.php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class FacebookLoginController extends Controller
{
    /**
     * Create a redirect method to facebook api.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback()
    {
        $userSocial = Socialite::driver('facebook')->user();
        //return $userSocial;
        $finduser = User::where('facebook_id', $userSocial->id)->first();
        if ($finduser) {
            auth()->login($finduser);
            return Redirect::to('/');
        } else {
            $new_user = User::create([
                'user_name'   => $userSocial->name,
                'email'       => $userSocial->email,
                'facebook_id' => $userSocial->id
            ]);
            auth()->login($new_user);
            if ($new_user->markEmailAsVerified()) {
                event(new Verified($new_user));
            }

            return Redirect::to('/');
        }
    }
}