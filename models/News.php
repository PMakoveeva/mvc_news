<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 26.06.2018
 * Time: 1:15
 */
class News{

    public static function getNewsItemById($id){
        $id = intval($id);
        if($id) {
            $db=DB::getConnection();

            $newsList = array();

            $result = $db->query('SELECT * FROM publication WHERE id =' . $id);
            //       ;
            //        exit();

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();
            //var_dump($newsItem);

            return $newsItem;
        }
    }

    public static function getNewsList(){
        //Запрос к БД
//        include_once ROOT . "setting.php";
//        function connect(){
//            $mysql=new mysqli(HOST, USER, PASSWORD, NAME);
//            $mysql->set_charset("utf8");
//            return $mysql;
//        }
//        $mysql=connect();
//        $res=$mysql->query('select `id`, `title`, `date`, `short_content` from  `news` ORDER BY `date` DESC LIMIT 10' );
//
//
//        while($row=$res->fetch_assoc()){
//            $newsList[]=$row;
//        }
//        return $newsList;


        $db=DB::getConnection();
var_dump($db);
        $newsList = array();

        $result = $db->query('SELECT id, title, `date`, short_content FROM publication ORDER BY `date` DESC LIMIT 10');
       var_dump($db->errorInfo());
//        exit();
        $i=0;

        while($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newsList;
    }
}