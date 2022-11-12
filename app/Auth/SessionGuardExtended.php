<?php

namespace App\Auth;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Authenticatable;

class SessionGuardExtended extends SessionGuard
{
    /**
     * Log a user into the application.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  bool  $remember
     * @return void
     */
    public function login(Authenticatable $user, $remember = false)
    {
        $this->updateSession($user->getAuthIdentifier());
        if ($remember) {
            $this->refreshRememberToken($user);
            $this->queueRecallerCookie($user);
        }
        $this->fireLoginEvent($user, $remember);
        $this->setUser($user);
    }
}
