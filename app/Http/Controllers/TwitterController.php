<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class TwitterController extends Controller
{
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleTwitterCallback()
    {
        try {
            $twitterUser = Socialite::driver('twitter')->user();

            // Vérifie si l'utilisateur existe déjà
            $user = User::where('twitter_id', $twitterUser->getId())->first();

            if (!$user) {
                // Si l'utilisateur n'existe pas, crée un nouvel enregistrement
                $user = User::create([
                    'name' => $twitterUser->getName(),
                    'email' => $twitterUser->getEmail() ? $twitterUser->getEmail() : '',
                    'twitter_id' => $twitterUser->getId(),
                    'avatar' => $twitterUser->getAvatar(),
                ]);
            }

            Auth::login($user);

            return redirect()->intended('/dashboard'); // Redirige vers la page souhaitée après connexion

        } catch (\Exception $e) {
            dd($e);
            return redirect('/test')->withErrors(['auth_error' => 'Erreur lors de l\'authentification avec Twitter.']);
        }
    }
}
