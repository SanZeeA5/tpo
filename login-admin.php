<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1>
            <center>Login Admin</center>
        </h1>
        <div>
            <div class="form">
                <form action="login.php" method="post">
                    <p>
                        <label for="username">Username: </label>
                        <input type="text" name="username"  required>
                    </p>
                    <p>
                        <label for="password">Password: </label>
                        <input type="password" name="password"  required>
                    </p>
                    
                    <a  href="index.php">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>