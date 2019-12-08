<?php
session_start();

// initializing variables
$fname = "";
$lname = "";
$uname = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cinemania');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);
  $telephone = mysqli_real_escape_string($db, $_POST['telephone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "Név megadása kötelező"); }
  if (empty($lname)) { array_push($errors, "Név megadása kötelező"); }
  if (empty($uname)) { array_push($errors, "Név megadása kötelező"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  /*if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }*/

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM felhasznalo WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['fname'] === $fname) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO felhasznalo (email, jelszo, v_nev, k_nev, telefonszam, felhasznalonev) 
  			  VALUES('$email', '$password', '$lname', '$fname', '$telephone', '$uname')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $uname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../../index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($uname)) {
    array_push($errors, "Felhasználónevet kötelező megadni");
  }
  if (empty($password)) {
    array_push($errors, "Jelszót kötelező megadni");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    echo $password;
    $query = "SELECT * FROM felhasznalo WHERE felhasznalonev='$uname' AND jelszo='$password'";
    $results = mysqli_query($db, $query);
    /*$user = mysqli_fetch_assoc($results);*/
    if (mysqli_num_rows($results) == 1) {
      
      $_SESSION['username'] = $uname;
      $_SESSION['success'] = "You are now logged in";
      header('location: ../../index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

// LOGIN GUEST
if (isset($_POST['login_guest'])) {
  $uname = "guest";
  $password = "guest";

  if (empty($uname)) {
    array_push($errors, "Felhasználónevet kötelező megadni");
  }
  if (empty($password)) {
    array_push($errors, "Jelszót kötelező megadni");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    echo $password;
    $query = "SELECT * FROM felhasznalo WHERE felhasznalonev='$uname' AND jelszo='$password'";
    $results = mysqli_query($db, $query);
    /*$user = mysqli_fetch_assoc($results);*/
    if (mysqli_num_rows($results) == 1) {
      
      $_SESSION['username'] = $uname;
      $_SESSION['success'] = "You are now logged in";
      header('location: ../../index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>