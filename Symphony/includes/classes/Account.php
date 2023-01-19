</<?php 

//Capital 'A' because naming convention
	class Account {

		private $errorArray;
		private $con;

		public function __construct($con){
			$this->con=$con;
			$this->errorArray= array();

		}

		public function login($un,$pw){

			$pw=md5($pw);

			$query = mysqli_query($this->con,"SELECT * FROM users WHERE username='$un' AND password='$pw'");

			if(mysqli_num_rows($query)==1){
				return true;
			}
			else{
				array_push($this->errorArray,Constants::$loginFail);
				return false;
			}
		}




		public function register($un, $fn, $ln, $em, $pw, $pw1){

				$this->validateUsername($un);
    			$this->validateFirstname($fn);
    			$this->validateLastname($ln);
    			$this->validateEmail($em);
    			$this->validatePasswords($pw,$pw1);

    			if(empty($this->errorArray)){
    				return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
    				//Insert into db
    			}

    			else{
    				return false;
    			}

		}

		public function getError($error){
			if(!in_array($error, $this->errorArray)){
				$error="";
			}
			return "<span class ='errorMessage'>$error</span>";
		}


		private function insertUserDetails($un, $fn, $ln, $em, $pw){

			$encryptedPW = md5($pw);
			$profilePic="assets/images/profile-pics/head-emerald.png";
			$date=date("Y-m-d");

			echo "INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$encryptedPW','$date','$profilePic')";


			$result=mysqli_query($this->con,"INSERT INTO users(username, firstName, lastName, email, password, signUpDate, profilePic) VALUES ('$un','$fn','$ln','$em','$encryptedPW','$date','$profilePic')");
			return $result;
		}




// private because it can be called within this class

		private function validateUsername($un){
			
			if (strlen($un)>25 || strlen($un)<5){
				array_push($this->errorArray, Constants::$UsernameCharacters);
				return;

			}

			$checkUsernameQuery= mysqli_query($this->con,"SELECT username from users WHERE username='$un'");

			if(mysqli_num_rows($checkUsernameQuery)!=0){
				array_push($this->errorArray,Constants::$usernameTaken);
				return;

			}
			//TODO check if username already exist

		}

		private function validateFirstname($fn){

    		if (strlen($fn)>25 || strlen($fn)<2){
				array_push($this->errorArray, Constants::$FirstNameCharacters);
				return;

			}


		}

		private function validateLastname($ln){

			if (strlen($ln)>25 || strlen($ln)<2){
				array_push($this->errorArray, Constants::$LastNameCharacters);
				return;

			}

    
		}

		private function validateEmail($em){
			//if (em != em2) then error

			if(!filter_var($em,FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray,Constants::$EmailInvalid); //checks for .com part regardless of email form
					return;
			}

    		$checkEmailQuery= mysqli_query($this->con,"SELECT email from users WHERE email='$em'");

			if(mysqli_num_rows($checkEmailQuery)!=0){
				array_push($this->errorArray,Constants::$emailTaken);
				return;

			}
    		//TODO: Username already exist
		}

		private function validatePasswords($pw,$pw1){

			if($pw!=$pw1){
				array_push($this->errorArray,Constants::$passwordDoNotMatch);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw))  // '^' - not
		    {
		    	array_push($this->errorArray,Constants::$passwordNotAlphaNumeric);
		    	return;
		    }

		    if (strlen($pw)>30 || strlen($pw)<4){
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;

		}
	}

}
 ?>