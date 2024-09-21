<html>
    <a href="index.php">Go Back</a>
<?php
$post_id=$_GET['post_id'];
$posts = file_get_contents("posts.json");
$posts = json_decode($posts, true);
$line = file_get_contents("visitors.csv");
$count = explode("\n", $line);
for ($i = 0; $i <= $post_id; $i++) {
    if (!isset($count[$i])) {
        $count[$i] = 0;
    }
}
$count[$post_id]++;
$fp = fopen("visitors.csv", "w");
fputs($fp, implode("\n",$count).PHP_EOL);
fclose($fp);
?>
    <head>
        <title>Assignment 3 and 4</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h2><?=$posts[$post_id]["Title"]?></h2>
        <h3>By: <?=$posts[$post_id]["Author"]?></h3>
        <h4>Published: <?=$posts[$post_id]["Date"]; echo "<br>"?>Views: <?=$count[$post_id]?></h4>
        <p><?=$posts[$post_id]["Content"]?></p>
    </body>

</html>