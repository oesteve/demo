<?php


namespace App\Query\Handler\Post;


use App\Query\Model\PostList;
use App\Query\Repository\PostListRepository;
use App\Query\Repository\PostShowRepository;

class HandlePostSearch
{

    /** @var PostListRepository */
    private $postListRepository;

    /**
     * @param QueryPostSearch $queryPostSearch
     */
    public function handle(QueryPostSearch $queryPostSearch)
    {
        $this->postListRepository->findPosts(
            $queryPostSearch->getQuery(),
            $queryPostSearch->getPage(),
            $queryPostSearch->getItemsPerPage()
        );
    }

}