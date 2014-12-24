<?php namespace Flarum\Core\Users\Events;

use Flarum\Core\Users\User;

class EmailWasChanged
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
