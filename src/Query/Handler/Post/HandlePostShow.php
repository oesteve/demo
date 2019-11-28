<?php


namespace App\Query\Handler\Post;


use App\Query\Model\PostShow;
use App\Query\Repository\PostShowRepository;

class HandlePostShow
{

    /** @var PostShowRepository */
    private $showPostRepository;

    /**
     * HandleShowPost constructor.
     * @param PostShowRepository $showPostRepository
     */
    public function __construct(PostShowRepository $showPostRepository)
    {
        $this->showPostRepository = $showPostRepository;
    }

    /**
     * @param QueryPostShow $queryShowPost
     *
     * @return PostShow
     */
    public function handle(QueryPostShow $queryShowPost)
    {
        return $this->showPostRepository->findBySlug($queryShowPost);
    }


}