<?php

namespace App\Events;

use App\Article;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class onAddArticle
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $userName;
    public $articleName;
    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct(Article $article,  $user)
    {
        $this->userName = $user->name;
        $this->articleName = $article->name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
