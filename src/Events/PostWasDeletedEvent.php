<?php


namespace App\Events;


use Symfony\Component\EventDispatcher\Event;

class PostWasDeletedEvent extends Event
{

    /**
     * @var int
     */
    private $postId;

    /**
     * PosWasDeleted constructor.
     * @param int $postId
     */
    public function __construct(int $postId)
    {
        $this->postId = $postId;
    }
    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }


}