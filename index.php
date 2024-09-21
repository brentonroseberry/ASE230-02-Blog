<!--Made by Brenton Roseberry-->
<?php
$posts = file_get_contents("posts.json");
$posts = json_decode($posts, true);
function printTitles($i, $blog_post){?>
    <div>
        <h3><a href="detail.php?post_id=<?= $i ?>"><?= $blog_post["Title"]?></a></h3>
        <h4>By: <?= $blog_post["Author"]?></h4>
        <br>
    </div>
<?php } ?>
<html>
    <head>
        <title>Assignment 3 and 4</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h2>Blog Posts:</h2><hr>
        <?php for($i=0;$i<count($posts);$i++){ printTitles($i, $posts[$i]); }?>
    </body>
</html>
