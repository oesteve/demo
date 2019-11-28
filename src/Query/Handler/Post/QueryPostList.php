<?php


namespace App\Query\Handler\Post;

/**
 * Consulta sobre los últimos posts
 */
class QueryPostList
{
    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $itemsPerPage;

    /**
     * QueryPostList constructor.
     * @param int $page
     * @param int $itemsPerPage
     */
    public function __construct(int $page = 1, int $itemsPerPage = 10)
    {
        $this->page = $page;
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }
}