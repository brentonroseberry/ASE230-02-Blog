<html>
    <a href="index.php">Go Back</a>
<?php
$i=$_GET['index'];
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
        <h2><?=$blog_posts[$i]["title"]?></h2>
        <h3>By: <?=$blog_posts[$i]["author"]?></h3>
        <h4>Published <?=$blog_posts[$i]["date"]?></h4>
        <p><?=$blog_posts[$i]["content"]?></p>
    </body>

</html>