<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <link rel="stylesheet" href="header.html">
    <h1>Login</h1>
    <?php 
        echo "<h2>Sign Up</h2>";
        if(empty($_POST['customer_login'])) { ?> 
    <div class="container">
        <form action="" method="post">
            <div class="def-input">
                <label for="email" name="email">Email</label>
                <input type="email" name="username" placeholder="name@email.com">
            </div>
                <br>
                <br>
            <div class="def-input">
                <label for="password" name="password">Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="forget">
                <label for="email" name="email">forget password</label>
                <input type="email" name="username" placeholder="name@email.com">
            </div>
            <div class="def-input">
                <input type="submit" name="customer_login" value="Login">
            </div>

        </form>
    </div>
    <?php } else{
            $email = $_POST['email'];
            $customer_password = $_POST['customer_password'];

            include 'connection.php';
            $query = "SELECT * FROM customer";
            $keeping = mysqli_query($connection, $query);

            if($keeping){
                echo "<br><p>Storing data sucessfully</p>";
            }else{
                echo "<br><p>Storing data failed</p>";
            }
        
         }?>
    <link rel="stylesheet" href="footer.html">
    
    
</body>
</html>