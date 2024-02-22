<?php
    include "conn.php";
    session_start();

    if(isset($_POST['reg_button'])){
    
        
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $name=$_POST['name'];
        
        //validation
        $validate = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

        $val_num = mysqli_num_rows($validate);

        if($val_num <= 0){

            $insertusers=mysqli_query($conn, "INSERT INTO user VALUES('0','$email','$pass','$name')");

            if($insertusers == true){
                ?>
                <script>
                    alert ("Data is inserted");
                    window.location.href="index.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert ("Data is not inserted");
                    window.location.href="reg.php";
                </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert ("This data or email is already used!");
                    window.location.href="reg.php";
                </script>
                <?php
        }
    }

    if(isset($_POST['login_button'])){

        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $check=mysqli_query($conn, "SELECT * FROM user
        WHERE email='$email' AND pass='$pass'");

        $n=mysqli_num_rows($check);

        if($n <= 0){
            ?>
            <script>
                alert("Email or Password is invalid!");
                window.location.href="index.php";
            </script>
            <?php
            
        }else{
            $_SESSION['email'] = $email;
            ?>
            <script>
                alert("You are already login!");
                window.location.href="home.php";
            </script>
            <?php
        }

    }



?>