<?php


namespace App\Article\Model;


class ArticleModel
{
    private $title;
    private $content;
    private $created_at;

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return ArticleModel
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
     * @return ArticleModel
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->created_at;
    }
    /**
     * @param mixed $created_at
     * @return ArticleModel
     */
    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
        return $this;
    }

}