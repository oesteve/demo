<?php


namespace App\Query\Repository;


use App\Query\Model\PostList;

interface PostListRepository
{
    /**
     * @param int $page
     * @param int $itemsPerPage
     *
     * @return PostList[]
     */
    public function getLastPost(int $page, int $itemsPerPage): array;

    /**
     * @param string $query
     * @param int $page
     * @param int $itemsPerPage
     *
     * @return PostList[]
     */
    public function findPosts(string $query, int $page, int $itemsPerPage): array;

    /**
     * @param PostList $listPost
     * @return mixed
     */
    public function persist(PostList $listPost);

}