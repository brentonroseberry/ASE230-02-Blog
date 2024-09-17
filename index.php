<!--Made by Brenton Roseberry-->
<?php
$blog_posts = [
    ["title"=>"How to cook",
        "content"=>"Just throw some stuff together, I don't know",
        "author"=>"Gordon Ramsey",
        "date"=>"8/13/2024"
    ],
    ["title"=>"Is there dinosaurs in Florida swamps?",
        "content"=>"Have you seen alligators? What else would those things be.",
        "author"=>"Florida Man",
        "date"=>"8/30/2024"
    ],
    ["title"=>"Dogs?",
        "content"=>"No, get a cat.",
        "author"=>"Old Lady",
        "date"=>"9/2/2024"
    ]
];
function printTitles($i, $blog_post){?>
    <div>
        <h3><a href="detail.php?post_id=<?= $i ?>"><?= $blog_post["title"]?></a></h3>
        <h4>By: <?= $blog_post["author"]?></h4>
        <br>
    </div>
<?php } ?>
<html>
    <head>
        <title>Assignment3</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h2>Blog Posts:</h2><hr>
        <?php for($i=0;$i<count($blog_posts);$i++){ printTitles($i, $blog_posts[$i]); }?>
    </body>
</html>
