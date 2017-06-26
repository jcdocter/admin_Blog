<!DOCTYPE html>
        <html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Title</title>
</head>
<body>
<h1></h1>
{foreach $blogs as $blog}
        <h1>{$blog.titel}</h1>
        <h2>Posted on: {$blog.datum}</h2>
        <p>{$blog.body}</p>
        <a href="index.php?action=wijzigenForm&id={$blog.idblogpost}">Edit tekst</a>
        <a href="index.php?action=verwijderen&id={$blog.idblogpost}">Delete tekst</a>
{/foreach}


</body>
</html>