<?php

class News
{
    
    /**
     * Return single news item with specitied id
     * @param integer $id
     */
    public static function getNewsItemById($id)
    {
       $host = 'localhost';
       $dbname = 'mvc_site';
       $user = 'root';
       $password = '';
       $db = new PDO("mysql:host=$host;dbname=$dbname",$user, $password);
       
       $newsList = array();
       
       $result = $db->query('SELECT id, title, date, short_content '
               . 'FROM news'
               . 'ORDER BY date DESC '
               . 'LIMIT 10');
       
       $i = 0;
       while ($row = $result->fetch()) {
           $newsList[$i]['id'] = $row['id'];
           $newsList[$i]['title'] = $row['title'];
           $newsList[$i]['date'] = $row['date'];
           $newsList[$i]['$short_content'] = $row['$short_content'];
           $i++;
       }
       
       return $newsList;
    }
    
    /**
     * Return an array of news items
     */
    public static function getNewsList()
    {
        //Запрос к БД
    }
}