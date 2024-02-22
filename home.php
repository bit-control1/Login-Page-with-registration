<?php
    include "conn.php";
    session_start();
    if (empty($_SESSION)){
        ?>
            <script>
                alert("Session Expired\nPlease Login!");
                window.location.href="index.php";

            </script>
        <?php
    }else{
        $email = $_SESSION['email'];
        $get_name=mysqli_query($conn, "SELECT * FROM user WHERE email='email'");
        while($row = mysqli_fetch_object($get_name)){
            $name = $row -> name;

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name?></title>
</head>
<body>
    <style>
     * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
       
    }

/* Set global font styles */
body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;  
}
    /* Style the header */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: gray;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 40px;
    }
    nav ul{
    list-style: none;
    display: flex;
    }
     /* header login and sign up href */
    nav a[href="index.php"]{
    background-color: red;
    color: black;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    transition-delay: 0.3s;
    transition-duration: 0.3s;
    font-size:30px;
    margin-right: 80px;
}


</style>

<header>

     <nav>
         <ul>
          <li><a href="index.php">LOGIN</a></li>
         
  
 </ul>
 </nav>
 </header>
 
        <h1>This is your homepage!</h1>
        Your Email:<?php echo $email; ?>
        <a href="index.php"> Logout </a>    

        
</body>
</html>