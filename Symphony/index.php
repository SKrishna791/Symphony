<?php
include("includes/config.php");

//session_destroy();

if(isset($_SESSION['userLoggedIn'])){
   $userLoggedIn=$_SESSION['userLoggedIn'];

}

else
{
   header("Location: register.php");
}

?>
<html>
<head>
   <title>Welcome to Symphony</title>

   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
   <div id="mainContainer">

      <div id="topContainer">
         <div id="navBarContainer">
            <nav class="navBar">
               <a href="index.php" class="logo">
                  <img src="assets/images/icons/logo.png">
                  
               </a>

               <div class="group">
                  <div class="navItem">
                     <a href="search.php" class="navItemLink">Search
                           <img src="assets/images/icons/search.png" class="icon" alt="Search">
                     </a>
                  </div>

               </div>

                <div class="group">
                  <div class="navItem">
                     <a href="browse.php" class="navItemLink">Browse </a>
                  </div>

                  <div class="navItem">
                     <a href="yourMusic.php" class="navItemLink">Your Music</a>
                  </div>

                  <div class="navItem">
                     <a href="profile.php" class="navItemLink">Account</a>
                  </div>




               </div>



            </nav>
         </div>

      </div>


       <div id="nowPlayingBarContainer">

      <div id ="nowPlayingBar">

         <div id="nowPlayingLeft">
            <div class="content">
               <span class="albumLink">
                  <img src="https://media.istockphoto.com/id/1372401945/photo/modern-black-picture-or-square-photo-frame-isolated.jpg?b=1&s=170667a&w=0&k=20&c=bmXOZlLuoGDq9RtS64i1JWl8nz1lKg-2hVE1SRT8I8E=" class="albumArtwork">
               </span>
               <div class="trackInfo">
                     <span class="trackName">
                        <span>Happy Birthday</span>
                     </span>

                     <span class="artistName">
                        <span>Sabari Krishna</span>
                     </span>

               </div>

            </div>
            
         </div>

         <div id="nowPlayingCentre">
            <div class="content playerControls">
               <div class ="buttons ">
                  <button class="controlButton shuffle" title ="Shuffle button" >
                     <img src="assets/images/icons/shuffle.png" alt="Shuffle" style="    height: 20px;
                                  width: 20px;">


                  <button class="controlButton previous" title ="Shuffle button" >
                     <img src="assets/images/icons/previous.png" alt="previous" style="    height: 20px;
                                  width: 20px;">


                  <button class="controlButton play" title ="Play button" >
                     <img src="assets/images/icons/play.png" alt="play" style="    height: 32px;
                                  width: 32px;">


                  <button class="controlButton pause" title ="Pause button" >
                     <img src="assets/images/icons/pause.png" alt="pause" style="    height: 32px;
                                  width: 32px;
                                  display: none;">


                  <button class="controlButton next" title ="Next button" >
                     <img src="assets/images/icons/next.png" alt="next" style="    height: 20px;
                                  width: 20px;">



                  <button class="controlButton repeat" title ="Repeat button" >
                     <img src="assets/images/icons/repeat.png" alt="repeat" style="    height: 20px;
                                  width: 20px;">

                                             
                  </button>
                  
               </div>

               <div class="playbackBar">

                  <span class="progressTime current">0.00</span>
                  
                  <div class="progressBar">
                     <div class="progressBarBg">
                        <div class="progress"></div>
                     </div>
                  </div>
                  

                  <span class="progressTime remaining">0.00</span>
               </div>
            </div>
            
         </div>

         <div id="nowPlayingRight">
            <div class ="volumeBar">
               
               <button class="controlButton volume" title="Volume button">
                  <img src="assets/images/icons/volume.png" alt="Volume">
                  
               </button>

               <div class="progressBar">
                     <div class="progressBarBg">
                        <div class="progress"></div>
                     </div>
                  </div>
            </div>

         </div>
         
      </div>
      
   </div>



   </div>

  
</body>
</html>