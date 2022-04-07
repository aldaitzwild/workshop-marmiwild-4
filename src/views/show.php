<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $recipe['title'] ?></title>
    </head>
    <body>
        <a href="/">Home</a>
        <h1><?= $recipe['title'] ?></h1>

        <p>
            <?= $recipe['description'] ?>
        </p>
        <div>
            <a href="/update?id=<?= $recipe["id"] ?>">update</a>
        </div>
        <div>
            <a href="/delete?id=<?= $recipe["id"] ?>">delete</a>
        </div>
    </body>
</html>
