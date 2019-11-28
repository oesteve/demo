<?php


namespace App\Query\Repository;


use App\Query\Model\PostList;
use App\Query\Model\PostShow;

interface PostShowRepository
{
    /**
     * @param string $slug
     * @return PostShow
     */
    public function findBySlug(string $slug): PostShow;

    /**
     * @param PostShow $listPost
     *
     * @return mixed
     */
    public function persist(PostShow $listPost);
}