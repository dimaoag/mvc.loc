<?php
include_once ROOT . '/models/News.php';



class NewsController{

    public function actionIndex(){

        $newsList = array();

        $newsList = News::getNewsList();


        echo 'actionIndex';
        echo '<pre>';
        print_r($newsList);
        echo '</pre>';

        return true;
    }

    public function actionView($id){
        echo 'actionView';
        if ($id){
            $newsItem = News::getNewsItemById($id);

            echo '<pre>';
            print_r($newsItem);
            echo '</pre>';
        }

        return true;
    }
}