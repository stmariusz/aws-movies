<?php
namespace Movies\Domain;

/**
 * Class Movie
 *
 * @package Movies\Domain
 */
class Movie
{
    /** @var int */
    private $id;

    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** @var string */
    private $sourceUrl;

    /** @var string */
    private $imageUrl;

    /** @var float */
    private $price;

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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getSourceUrl(): string
    {
        return $this->sourceUrl;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}