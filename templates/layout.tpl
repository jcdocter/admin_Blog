<!DOCTYPE html>
        <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Dit is een voorbeeld van een Admin</h1>
{block name="content"}{/block}

{block name="melding"}
    <p>
        {$melding|default: ''}
    </p>
{/block}
</body>
</html>