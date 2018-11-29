<?php
/**
 * Created by PhpStorm.
 * User: matteo.salomone
 * Date: 29-Nov-18
 * Time: 3:17 PM
 */

namespace LaravelDay\Article;


final class Article
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
    private $body;
    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * Article constructor.
     * @param string $title
     * @param string $body
     * @param \DateTime $creationDate
     */
    public function __construct(int $id, string $title, string $body, \DateTime $creationDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
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
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTime
    {
        return $this->creationDate;
    }
}