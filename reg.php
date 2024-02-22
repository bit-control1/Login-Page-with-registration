<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
   
   
</head>

    
<body>
    <style>
body {
          font-family: Arial, sans-serif;
          
      }
      /* header style */
    header{
    background-color:gray;    
    padding: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
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
    font-size:20px;
    margin-right: 40px;
}
nav a[href="reg.php"]{
    background-color: red;
    color: black;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    transition-delay: 0.3s;
    transition-duration: 0.3s;
    font-size:20px;
    margin-right: 70px;
}

      h1{
          
          text-align: center;
          color: black;
          font-family:  Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
          font-size: 55px
      }

      form {
          max-width: 400px;
          margin: 0 auto;
          background-color: #7F574A;
          padding: 60px;
          border-radius: 10px;
          box-shadow: 0 0 15px rgba(0,0,0,0.2);
          border: 1px solid black;
          opacity: 0.8;
          padding-bottom: 20px;
          margin-top: 3%;
          
      }

      label {
          display: block;
          font-size: 25px;
          margin-bottom: 8px;
          color: silver;
          font-weight: bold;
          padding-top: 5px;
      }


    input[type="text"],
    input[type="email"],
    input[type="password"]{
          display:block;
          width: 95%;
          padding: 15px;
          margin-bottom: 20px;
          border-radius: 5px;
          border: none;
          box-shadow: 0 0 10px rgba(0,0,0,0,1);;
      }

      input[placeholder="Email or Phone Number"],
      input[placeholder="Password"]
      input[placeholder="text"] {
          font-size: 20px;
      }

      input[type="submit"] {
        
          display: block;
          width: 90%;
          padding: 15px;
          margin-top: 2px;
          background-color:red;
          color: black;
          border-radius: 10px;
          border: none;
          cursor: pointer;
          font-size: 18px;
          
      }

      input[type="submit"]:hover {
          background-color:red;
          
      }

      p{
          font-weight: bold;
          font-family: sans-serif;
          text-align: center;
      }
      
      </style>
      <header>

     <nav>
         <ul>
          <li><a href="index.php">Click to Login</a></li>
          <li><a href="reg.php">Click to Register</a></li>

          </ul>
 </nav>
 </header>
    <form action="process.php" method="POST">
            
    
            <h1>Registration Form</h1>
            
            <label>Email:</label></br>
            <input type="email" name="email" placeholder="Enter Email Here!" required ><br>                      
            <label>Password:</label></br>
            <input type="password" name="pass" placeholder="Enter Password Here!" required> <br>        
            <label>Name:</label></br>
            <input type="text" name="name"placeholder="Enter Name Here!" required><br>  

            <input type="submit" name="reg_button" value="Register">
    </div>    
    </form>


</body>
</html>