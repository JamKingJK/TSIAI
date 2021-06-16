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

    /**
     * @return mixed
     */
    public function getArticleId() {
        return $this->article_id;
    }
    /**
     * @param mixed $article_id
     * @return ArticleModel
     */
    public function setArticleId($article_id) {
        $this->article_id = $article_id;
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
     * @return mixed
     */
    public function getCreatedAt() {
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
     * @return ArticleModel
     */
    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getLikes() {
        return $this->likes;
    }


}