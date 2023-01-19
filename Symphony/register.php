<?php
     include ("includes/config.php");
    include ("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);
    
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
   <link rel="stylesheet" type="text/css" href="assets/css/register.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="assets/js/register.js"></script>


</head>
<body>
<?php
    if(isset($_POST['RegisterButton'])){
        echo'<script>
                    $(document).ready(function() {



                     $("#loginform").hide();
                    $("#RegisterForm").show();
              
            });
    </script>';
    }
    else
    {
        echo'<script>
                    $(document).ready(function() {



                     $("#loginform").show();
                    $("#RegisterForm").hide();
              
            });
    </script>';
    }

?>

    
    <div id="background">
        <div id ="loginContainer">
            <div id = "inputContainer">
                <form id ="loginform" action="register.php" method ="POST">
                    <h2>
                        Login to your account
                    </h2>
                    <p>
                        <?php
                        echo $account->getError(Constants::$loginFail); ?>
                        <label for ="loginUsername"> <p>Username</p> </label>
                    <input id ="loginUsername"type="text" name="loginUsername" placeholder="Eg: Melody123" value ="<?php getInputValue('loginUsername')?>" required></p>
                    <p>
                        <label for ="Password"><p>Password</p> </label>
                     <input id ="Password"type="Password" name="Password" placeholder="" required>
                 </p>
                 <button type="submit" name="loginButton">LOG IN</button>

                 <div class="hasAccountText">
                    <span id="hideLogin">Create your First account! Register Now!</span>
                 </div>
        </form>


        <form id ="RegisterForm" action="register.php" method ="POST">
                    <h2>
                        Create your free account
                    </h2>
                    <p>

                        <?php
                        echo $account->getError(Constants::$UsernameCharacters); ?>
                        <?php
                        echo $account->getError(Constants::$usernameTaken); ?>
                        <label for ="Username">Username </label>
                    <input id ="Username"type="text" name="Username" placeholder="Eg: Melody123" value ="<?php getInputValue('Username')?>"required></p>
            <p>

                 <?php
                        echo $account->getError(Constants::$FirstNameCharacters); ?>
                        <label for ="Firstname">First Name </label>
                    <input id ="Firstname"type="text" name="Firstname" placeholder="Eg: Michael" value ="<?php getInputValue('Firstname')?>" required></p>

                    <p>

                         <?php
                        echo $account->getError(Constants::$LastNameCharacters); ?>
                        <label for ="LastName">LastName </label>
                    <input id ="LastName"type="text" name="LastName" placeholder="Eg: Scott" value ="<?php getInputValue('LastName')?>"required></p>

                     <p>
                         <?php
                        echo $account->getError(Constants::$EmailInvalid); ?>

                        <?php
                        echo $account->getError(Constants::$emailTaken); ?>

                        <label for ="Email">Email</label>
                    <input id ="Email"type="Email" name="Email" placeholder="Eg:abcde@gmail.com" value ="<?php getInputValue('Email')?>"required></p>



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

                 <div class="hasAccountText">
                    <span id="hideRegister">Login Here</span>
                 </div>
        </form>

        </div>

            <div id="loginText">
                <h1> Love Music, Listen it Here!</h1>
                <h2> All your songs are available here </h2>
                <ul>
                    <li> Discover and explore your music here</li>
                    <li> Create your playlists</li>
                    <li> Follow artists and their albums </li>
                </ul>
            </div>

    </div>
</div>
</body>
</html>