<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php?action=wijzigen" method="post" id="update">
    <input type="text" name="titel" value="{$blog.titel}"><br>
    <textarea name="body" form="update">{$blog.body}</textarea>
    <input type="submit" value="updaten">
    <input name="id" type="hidden" value="{$blog.idblogpost}">
</form>



</body>
</html>