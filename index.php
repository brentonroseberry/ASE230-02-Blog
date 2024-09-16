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
]
?>
<html>
    <head>
        <title>Assignment3</title>
    </head>
    <body>
        <h2>Blog Posts:</h2><hr>
        <?php for($i=0;$i<count($blog_posts);$i++){ ?>
            <div>
                <h3><a href="detail.php?index=<?= $i ?>"><?= $blog_posts[$i]["title"]?></a></h3>
                <h4>By: <?= $blog_posts[$i]["author"]?></h4>
                <br>
            </div>
        <?php }?>
    </body>
</html>
