<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h2>Sign Up</h2>";
        if(empty($_POST['customer_register'])) { ?> 
            <form action="register.php" method="post">
            <div class="def-input">
                <label for="username" name="username">Username</label>
                <input type="text" name="username" placeholder="JamesSmith">
            </div>
            <br>
            <div class="def-input">
                <label for="email" name="email">Email</label>
                <input type="email" name="username" placeholder="name@email.com">
            </div>
                <br>
            <div class="def-input">
                <label for="phone" name="phone">Phone</label>
                <input type="number" name="phone" placeholder="+06 123456789">
            </div>
                <br>
            <div class="def-input">
                <label for="password" name="password">Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>

        <div class="def-input">
                <input type="submit" name="customer_register" value="Sign Up">
            </div>

        </form>
        <?php } else{
            $username= $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];

            include 'connection.php';
            $query = "INSERT INTO customer (customer_name, phone, email, password) VALUES('$username', $phone, '$email', '$password')";
            $keeping = mysqli_query($connection, $query);

            if($keeping){
                echo "<br><p>Storing data sucessfully</p>";
            }else{
                echo "<br><p>Storing data failed</p>";
            }
        
         }?>
</body>
</html>