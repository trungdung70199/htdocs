<?php
$regis = $_POST;
//var_dump($regis);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Confirm</h1>
    <form action="" method="post">
        <div>
            <label for="">Name</label>
            <p>
                <?= $regis['name']?>
            </p>
            <!-- <input type="text" name="email"> -->
        </div>
        <div>
            <label for="">Email</label>
            <p>
                <?= $regis['email'] ?>
            </p>
        </div>
        <div>
            <label for="">Password</label>
            <!-- <input type="password" name="password"> -->
        </div>
        <div>
            <label for="">Birthday</label>
            <p><?= $regis['month']?></p>
        </div>

        <div>
            <label for="">Note</label>
            <p><?= nl2br($regis['note'])?></p>
        </div>
        <button>
            Regis
        </button>
        <a href="input.php">Back</a>
    </form>
</body>
</html>

