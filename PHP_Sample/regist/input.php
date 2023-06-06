<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Regis</h1>
    <form action="confirm.php" method="post">
        <div>
            <label for="">Name</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div>
            <label for="Gender_male">Gender</label>
            <input type="Gender_male" name="gender" value="male">
            <label for="">Male</label>
            <input type="Gender_female" name="gender" value="female">
            <label for="Gender_female">Female</label>
        </div>
        <div>
            <label for="">Birthday</label>
            <select name="month" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            Month
        </div>
        <div>
            <label for="">Note</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
        </div>
        <!-- Lam nut confirm chuyen sang mau blue -->
        <button class="btn btn-primary">Confirm</button>
    </form>
</body>
</html>
