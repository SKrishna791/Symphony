<?php

if(isset($_POST['loginButton'])){
    echo "Login button was pressed"; // if login button is pressed this message is printed

    $username=$_POST['loginUsername'];
    $password=$_POST['Password'];

    $result=$account->login($username,$password);

    if($result){
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}

?>
