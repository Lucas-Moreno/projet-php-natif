<?php

namespace App\Entity;

class Article
{
    private int $id;
    private string $author;
    private string $title;
    private date $date;
    private string $imgUrl;
    private string $content;

    /**
     * @return string
     */

    public function getAuthor(): string
    {
        return $this->author;
    }


    /**
     * @param string $author
     * @return Article
     */

    public function setAuthor(string $author): Article
    {
        $this->author = $author;
        return $this;
    }


    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @param string $title
     * @return Article
     */
    
    public function setTitle(string $title): Article
    {
        $this->title = $title;
        return $this;
    }

    public function getDate(): date
    {
        return $this->date;
    }


    /**
     * @param string $date
     * @return Article
     */
    
    public function setDate(string $date): Article
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Article
     */
    public function setId(int $id): Article
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getImgUrl(): string
    {
        return $this->imgUrl;
    }

    /**
     * @param string imgUrl
     * @return Article
     */
    public function setImgUrl(string $imgUrl): Article
    {
        $this->imgUrl = $imgUrl;
        return $this;
    }


    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Article
     */
    public function setContent(string $content): Article
    {
        $this->content = $content;
        return $this;
    }
}