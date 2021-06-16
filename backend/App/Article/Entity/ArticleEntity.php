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

    public function getId()
    {
        return $this->article_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getContent() {
        return $this->content;
    }
    public function setContent($content) {
        $this->content = $content;
        return $this->content;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }
    public function setCreatedAt($createdAt) {
        $this->created_at = $createdAt;
        return $this->created_at;
    }

    public function getAuthor() {
        return $this->author;
    }
    public function setAuthor($author) {
        $this->author = $author;
        return $this->author;
    }

    public function getSources() {
        return $this->sources;
    }
    public function setSources($sources) {
        $this->sources = $sources;
        return $this->sources;
    }

    public function getLikes() {
        return $this->likes;
    }
    public function setLikes($likes) {
        $this->likes = $likes;
        return $this->likes;
    }

    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
        return $this->status;
    }

}