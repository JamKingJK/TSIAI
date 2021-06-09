<?php


namespace App\Article\Model;


class ArticleModel
{
    private $article_id;
    private $title;
    private $content;
    private $author;
    private $created_at;
    private $likes;


    public function getArticleId() {
        return $this->article_id;
    }

    public function setArticleId($article_id) {
        $this->article_id = $article_id;
        return $this;
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

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getLikes() {
        return $this->likes;
    }


}