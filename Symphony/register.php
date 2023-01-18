<?php
     include ("includes/config.php");
    include ("includes/classes/Account.php");
    include("includes/classes/Constants.php");
    $account = new Account();
    include ("includes/handler/register-handler.php");
    include ("includes/handler/login-handler.php");

    function getInputValue($name){
        if (isset($_POST[$name])){

            echo $_POST[$name];
        }

    }



    
?>



<html>
<head>
   <title>Welcome to Melody</title>
</head>
<body>
    <div id = "inputContainer">
        <form id ="loginform" action="register.php" method ="POST">
            <h2>
                Login to your account
            </h2>
            <p>
                <label for ="loginUsername">Username </label>
            <input id ="loginUsername"type="text" name="loginUsername" placeholder="Enter your Username" required></p>
            <p>
                <label for ="Password">Password </label>
             <input id ="Password"type="Password" name="loginUsername" placeholder="" required>
         </p>
         <button type="submit" name="loginButton">LOG IN</button>
</form>


<form id ="RegisterForm" action="register.php" method ="POST">
            <h2>
                Create your free account
            </h2>
            <p>

                <?php
                echo $account->getError(Constants::$UsernameCharacters); ?>
                <label for ="Username">Username </label>
            <input id ="Username"type="text" name="Username" placeholder="Enter your Username" value ="<?php getInputValue('Username')?>"required></p>
    <p>

         <?php
                echo $account->getError(Constants::$FirstNameCharacters); ?>
                <label for ="Firstname">First Name </label>
            <input id ="Firstname"type="text" name="Firstname" placeholder="Enter your First Name" value ="<?php getInputValue('Firstname')?>" required></p>

            <p>

                 <?php
                echo $account->getError(Constants::$LastNameCharacters); ?>
                <label for ="LastName">LastName </label>
            <input id ="LastName"type="text" name="LastName" placeholder="Enter your LastName" value ="<?php getInputValue('LastName')?>"required></p>

             <p>
                 <?php
                echo $account->getError(Constants::$EmailInvalid); ?>
                <label for ="Email">Email</label>
            <input id ="Email"type="Email" name="Email" placeholder="abc@gmail.com" value ="<?php getInputValue('Email')?>"required></p>



            <p>
                 <?php
                echo $account->getError(Constants::$passwordDoNotMatch); ?>
                

                 <?php
                echo $account->getError(Constants::$passwordNotAlphaNumeric); ?>

                 <?php
                echo $account->getError(Constants::$passwordCharacters); ?>
             

                <label for ="Password">Password </label>
             <input id ="Password"type="Password" name="Password" placeholder="" required>
         </p>
         <p>
                <label for ="ConfirmPassword"> Confirm your Password </label>
            <input id ="ConfirmPassword"type="Password" name="ConfirmPassword" placeholder="" required></p>

         <button type="submit" name="RegisterButton">Register</button>
</form>
</div>
</body>
</html>