<?php


namespace App\Query\Projector;


use App\Events\PostWasCreatedEvent;
use App\Events\PostWasDeletedEvent;
use App\Events\PostWasUpdatedEvent;
use App\Query\Repository\PostListRepository;
use App\Query\Repository\PostShowRepository;
use App\Query\Transformer\PostListTransformer;
use App\Query\Transformer\PostShowTransformer;
use App\Repository\PostRepository;

class PostProjector
{

    /** @var PostListTransformer */
    private $postListTransformer;

    /** @var PostListRepository */
    private $postListRepository;

    /** @var PostShowTransformer */
    private $postShowTransformer;

    /** @var PostShowRepository */
    private $postShowRepository;

    /** @var PostRepository */
    private $postRepository;

    /**
     * PostProjector constructor.
     * @param PostListTransformer $postListTransformer
     * @param PostListRepository $postListRepository
     * @param PostShowTransformer $postShowTransformer
     * @param PostShowRepository $postShowRepository
     */
    public function __construct(PostListTransformer $postListTransformer, PostListRepository $postListRepository, PostShowTransformer $postShowTransformer, PostShowRepository $postShowRepository)
    {
        $this->postListTransformer = $postListTransformer;
        $this->postListRepository = $postListRepository;
        $this->postShowTransformer = $postShowTransformer;
        $this->postShowRepository = $postShowRepository;
    }


    public function onPostWasCreated(PostWasCreatedEvent $postWasCreated)
    {
        $post = $this->postRepository->findOrFile($postWasCreated->getPostId());

        $this->postListRepository->persist($this->postListTransformer->transform($post));
        $this->postShowRepository->persist($this->postShowTransformer->transform($post));

    }

    public function onPostWasUpdated(PostWasUpdatedEvent $postWasUpdated){

    }

    public function onPostWasDeleted(PostWasDeletedEvent $postWasDeleted){

    }
}