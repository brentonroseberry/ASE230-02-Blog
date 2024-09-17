<html>
    <a href="index.php">Go Back</a>
<?php
$post_id=$_GET['post_id'];
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
    <head>
        <title>Assignment3</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h2><?=$blog_posts[$post_id]["title"]?></h2>
        <h3>By: <?=$blog_posts[$post_id]["author"]?></h3>
        <h4>Published <?=$blog_posts[$post_id]["date"]?></h4>
        <p><?=$blog_posts[$post_id]["content"]?></p>
    </body>

</html>