<?php


namespace App\Article\Model;


class ArticleRequest {

    private $content;
    private $title;
    private $article_id;

    /**
     * @return mixed
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return ArticleRequest
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return ArticleRequest
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
    public function getArticleId() {
        return $this->article_id;
    }
}