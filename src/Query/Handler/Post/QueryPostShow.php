<?php


namespace App\Query\Handler\Post;

/**
 * Obtiene los post sobre un slug
 */
class QueryPostShow
{

    /** @var string */
    private $slug;

    /**
     * QueryShowPost constructor.
     * @param string $slug
     */
    public function __construct(string $slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

}