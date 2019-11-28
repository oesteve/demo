<?php


namespace App\Query\Model;

class PostShow
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var \DateTime
     */
    private $publishedAt;

    /**
     * @var string
     */
    private $authorName;

    /**
     * @var int
     */
    private $nComments;

    /**
     * @var string[]
     */
    private $tags;

    /**
     * QueryListModel constructor.
     * @param int $id
     * @param string $title
     * @param string $slug
     * @param string $summary
     * @param \DateTime $publishedAt
     * @param string $authorName
     * @param int $nComments
     * @param string[] $tags
     */
    public function __construct(int $id, string $title, string $slug, string $summary, \DateTime $publishedAt, string $authorName, int $nComments, array $tags)
    {
        $this->id = $id;
        $this->title = $title;
        $this->slug = $slug;
        $this->summary = $summary;
        $this->publishedAt = $publishedAt;
        $this->authorName = $authorName;
        $this->nComments = $nComments;
        $this->tags = $tags;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt(): \DateTime
    {
        return $this->publishedAt;
    }

    /**
     * @return string
     */
    public function getAuthorName(): string
    {
        return $this->authorName;
    }

    /**
     * @return int
     */
    public function getNComments(): int
    {
        return $this->nComments;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }
}
