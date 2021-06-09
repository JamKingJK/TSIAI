<?php


namespace App\User\Model;


class ArticleModel
{
    private $article_id;
    private $title_id;
    private $content;
    private $author;
    private $created_at;
    private $sources;
    private $likes;
    private $status;

    public function getArticleId() {
        return $this->article_id;
    }

    public function setArticleId($article_id) {
        $this->article_id = $article_id;
        return $this;
    }

    public function getTitleId() {
        return $this->title_id;
    }

    public function setTitleId($title_id) {
        $this->title_id = $title_id;
        return $this;
    }

    public function getContent() {
        return $this->content;
    }





}