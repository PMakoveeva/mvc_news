<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 23.06.2018
 * Time: 1:00
 */
include_once ROOT . '/models/News.php';
class NewsController{
    public function actionIndex(){
       $newsList = News::getNewsList();
       echo '<pre>';
       print_r($newsList);
       echo '</pre>';
        return true;
    }

    public function actionView($id){
        //echo $id;
        $newsItem = News::getNewsItemById($id);
        echo '<pre>';
        print_r($newsItem);
        echo '</pre>';
        return true;
    }
}