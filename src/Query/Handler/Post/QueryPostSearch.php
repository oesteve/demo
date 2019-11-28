<?php


namespace App\Query\Handler\Post;

/**
 * Busqueda de post sobre una cadena
 */
class QueryPostSearch
{
    /**
     * @var string
     */
    private $query;

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $itemsPerPage;

    /**
     * QueryPostSearch constructor.
     * @param string $query
     * @param int $page
     * @param int $itemsPerPage
     */
    public function __construct(string $query, int $page, int $itemsPerPage)
    {
        $this->query = $query;
        $this->page = $page;
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
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