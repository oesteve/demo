<?php


namespace App\Query\Handler\Post;


use App\Query\Model\PostList;
use App\Query\Repository\PostListRepository;

class HandlePostList
{

    /** @var PostListRepository */
    private $postListRepository;

    /**
     * HandleQueryPost constructor.
     * @param PostListRepository $postListRepository
     */
    public function __construct(PostListRepository $postListRepository)
    {
        $this->postListRepository = $postListRepository;
    }

    /**
     * @param QueryPostList $queryPostList
     * @return PostList[]
     */
    public function handle(QueryPostList $queryPostList)
    {
        return $this->postListRepository->getLastPost($queryPostList->getPage(), $queryPostList->getItemsPerPage());
    }

}