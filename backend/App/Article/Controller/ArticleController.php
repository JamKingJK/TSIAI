<?php


namespace App\Article\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Article\Model\ArticleRequest;
use App\Article\Service\ArticleService;

/**
 * @Controller(path="/article")
 */
class ArticleController{

    private $articleService;

    /**
     * ArticleController constructor.
     */
    public function __construct() {
        $this->articleService = new ArticleService();
    }


    /**
     * @Authorized(permission="GET_USER_PERMISSION")
     * @Action(method="GET")
     */
    public function getArticles() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Action(method="POST")
     */
    public
    function addArticle() {
        /** @var ArticleRequest $articleRequest */
        $articleRequest = RestBodyReader::readRequestBody(ArticleRequest::class);

        $createdArticle = $this->articleService->addArticle($articleRequest->getArticleId(), $articleRequest->getTitle(), $articleRequest->getContent());

        echo JsonSerializer::getInstance()->serialize($createdArticle, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public
    function getArticle($id) {
        echo JsonSerializer::getInstance()->serialize($this->articleService->getArticle($id), 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public
    function updateArticle($id) {
        echo sprintf("Updated article with id: %s", $id);
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public
    function deleteArticle($id) {
        echo sprintf("Deleted article with id: %s", $id);
    }
}