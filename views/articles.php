<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Мой первый блог</h1>
        <div>
            <?php foreach($articles as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <em>Опубликовано: <?=$a['date']?> </em>
                <p><?=$a['content']?></p>
            </div>
            <?php endforeach ?>
        </div>
        <footer>
        <p>Мой первый блог <br>Copyright &copy; 2018</p>
        </footer>
    </div>
</body>
</html>
