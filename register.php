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
        <div class="container">
            <form action="register.php" method="post">
            <div class="def-input">
                <label for="customer_name" class="customer_name">Username</label>
                <input type="text" name="customer_name" placeholder="JamesSmith">
            </div>
            <br>
            <div class="def-input">
                <label for="email" class="email">Email</label>
                <input type="email" name="email" placeholder="name@email.com">
            </div>
                <br>
            <div class="def-input">
                <label for="phone" class="phone">Phone</label>
                <input type="number" name="phone" placeholder="+06 123456789">
            </div>
                <br>
            <div class="def-input">
                <label for="customer_password" class="customer_password">Password</label>
                <input type="password" name="customer_password" placeholder="Password">
            </div>

        <div class="def-input">
                <input type="submit" name="customer_register" value="Sign Up">
            </div>

        </form>
        </div>
        <?php } else{
            $customer_name= $_POST['customer_name'];
            $email = $_POST['email'];
            $customer_password = $_POST['customer_password'];
            $phone = $_POST['phone'];
            
            include 'connection.php';
            
            $query = " INSERT INTO customer (customer_name, phone, email, password) VALUES('$customer_name', '$phone', '$email', '$customer_password')";
            $keeping = mysqli_query($connection, $query);
            
            if($keeping){
                echo "<br><p>Storing data sucessfully</p>";
            }else{
                echo "<br><p>Storing data failed</p>";
            }
       
        
         }?>
</body>
</html>