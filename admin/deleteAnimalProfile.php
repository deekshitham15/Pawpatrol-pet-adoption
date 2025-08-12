<?php 
	include'../functions.php';
  if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
  if (!isAdmin()) {
    $_SESSION['msg'] = "You do not have access";
    header('location: ../user/main.php');
  }
  
  $animalID = intval($_GET['animalID']);
  delete_animal($animalID);
  function delete_animal($animal) {
    if ($animal) {
        $query = "DELETE FROM animal WHERE animalID = '$animal'";
        $db = mysqli_connect('localhost', 'root', '', 'pet_adoption');
			mysqli_query($db, $query);
			$_SESSION['success']  = "Profile has deleted";
			header('location: adoptionListing.php');
    }
  }
?>