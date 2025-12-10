<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>messages</title>
</head>

<body>
    <h1 style="text-align: center;">All messages</h1>
    <?php foreach ($messages as $message): ?>
        <div style="background-color: #333; color:aliceblue; padding:10px; width:50vw; margin:10px auto; border-radius:10px; " >
            <h2><?= $message["name"] ?></h2>
            <h4><?= $message["email"] ?></h4>
            <p><?= $message["message"] ?></p>
        </div>

    <?php endforeach ?>
</body>

</html>