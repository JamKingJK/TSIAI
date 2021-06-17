<?php


namespace App\Article\Entity;


use App\Database\Entity\Entity;

class ArticleEntity extends Entity {

    private $article_id;
    private $title;
    private $content;
    private $author;
    private $created_at;
    private $sources;
    private $likes;
    private $status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->article_id;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return ArticleEntity
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return ArticleEntity
     */
    public function setContent($content) {
        $this->content = $content;
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->created_at;
    }
    /**
     * @param mixed $createdAt
     * @return ArticleEntity
     */
    public function setCreatedAt($createdAt) {
        $this->created_at = $createdAt;
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getAuthor() {
        return $this->author;
    }
    /**
     * @param mixed $author
     * @return ArticleEntity
     */
    public function setAuthor($author) {
        $this->author = $author;
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getSources() {
        return $this->sources;
    }
    /**
     * @param mixed $sources
     * @return ArticleEntity
     */
    public function setSources($sources) {
        $this->sources = $sources;
        return $this->sources;
    }

    /**
     * @return mixed
     */
    public function getLikes() {
        return $this->likes;
    }
    /**
     * @param mixed $likes
     * @return ArticleEntity
     */
    public function setLikes($likes) {
        $this->likes = $likes;
        return $this->likes;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }
    /**
     * @param mixed $status
     * @return ArticleEntity
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this->status;
    }

}