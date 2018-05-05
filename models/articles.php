<?php
    //Вызвать все статьи из БД////////////////////////////////////////////////////////////////////
    function articles_all($link)
    {
        //Запрос
        $query = "SELECT * FROM  articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);

        if(!$result){
            die(mysqli_error($link));
        }

        //Извлечение из БД
        $n = mysqli_num_rows($result);
        $articles = array();

        for($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }

        return $articles;

    }

    //Вызвать одну статью из БД//////////////////////////////////////////////////////////////////////
    function articles_get($link, $id_article)
    {
        //Запрос
        $query = sprintf("SELECT * FROM  articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query);

        if(!$result){
            die(mysqli_error($link));
        }

        //Извлечение из БД
        $article = mysqli_fetch_assoc($result);


        return $article;
    }

    //Добавить статью в БД///////////////////////////////////////////////////////////////////////////
    function articles_new($link, $title, $date, $content)
    {

    }

    //Вызвать статью из БД и отредактировать///////////////////////////////////////////////////////////
    function articles_edit($link, $id, $title, $date, $content)
    {

    }

    //Удалить статью из БД////////////////////////////////////////////////////////////////////////////
    function articles_delete($link, $id){

}
