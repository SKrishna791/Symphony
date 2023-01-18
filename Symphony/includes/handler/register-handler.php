<?php


function sanitizeFormUsername($inputText){
    $inputText=strip_tags($inputText); // removes html elements
    $inputText=str_replace(" ", "", $inputText);
    return $inputText;

}

function sanitizeFormString($inputText){
 $inputText=strip_tags($inputText); // removes html elements
    $inputText=str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));   
    return $inputText; 

}
function sanitizeFormPassword($inputText){
    $inputText=strip_tags($inputText);
    return $inputText;
}


if(isset($_POST['loginButton'])){
    echo "Login button was pressed"; // if login button is pressed this message is printed
}
if(isset($_POST['RegisterButton'])){

    $username =sanitizeFormUsername($_POST['Username']);

    $firstname =sanitizeFormString($_POST['Firstname']);

    $lastname = sanitizeFormString($_POST['LastName']);

    $email = sanitizeFormString($_POST['Email']);

    $password = sanitizeFormString($_POST['Password']);

    $Cpassword = sanitizeFormString($_POST['ConfirmPassword']);


    $wasSuccessfull=$account->register($username,$firstname,$lastname,$email,$password,$Cpassword);
   
    if($wasSuccessfull){
        headed("Location: index.php");
    }



}

?>