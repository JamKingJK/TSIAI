<?php


namespace App\Article\Service;


use App\Database\Entity\EntityMapper;
use App\Article\Entity\ArticleEntity;
use App\Article\Model\ArticleModel;
use App\Article\Repository\ArticleRepository;

class ArticleService {

    private $articleRepository;

    /**
     * ArticleService constructor.
     */
    public function __construct() {
        $this->articleRepository = new ArticleRepository();
    }


    public function getArticle($id) {
        $articleEntity = $this->articleRepository->getById($id);

        return EntityMapper::mapEntityToResponse($articleEntity, ArticleModel::class);
    }

    public function addArticle($title, $content) {
        $articleEntity = new ArticleEntity();


        $articleEntity->setTitle($title)
            ->setContent($content);

        $createdArticle = $this->articleRepository->save($articleEntity);

        return EntityMapper::mapEntityToResponse($createdArticle, ArticleModel::class);
    }
}