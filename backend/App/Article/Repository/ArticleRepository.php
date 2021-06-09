<?php


namespace App\Article\Repository;


use App\Database\Repository\Repository;
use App\Article\Entity\ArticleEntity;

class ArticleRepository extends Repository {

    protected function getEntityName() {
        return "App\Article\Entity\ArticleEntity";
    }

    protected function getTableName() {
        return "article";
    }

}
