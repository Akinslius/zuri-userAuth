<?php
//get user input
$email = $_POST['email'];
$password = $_POST['password'];

$path = "../storage/users.csv"; //file path
$open = fopen($path, "r");
// read the entire file into a string
$file = file_get_contents("../storage/users.csv");
//check if data match with data in csv

//if yes, start a session
session_start();
//converting csv into multidimentional array
$csv = array_map('str_getcsv', file('../storage/users.csv'));
//column for all name
$c_name = array_column($csv, 0);
//column for all email
$c_email = array_column($csv, 1);
//column for all password
$c_password = array_column($csv, 2);
//search the array row using the email in the email column, return the key of the array
$search = array_search($email, $c_email);
//search the array row using the password in the password column, return the key of the array
$search_password = array_search($password, $c_password);

//save the row where the user is present in the variable
$row = ($csv[$search]);
//extract only the name and stored in a session variable
$_SESSION['user'] = ($row[0]);
//extract only the email
$db_email = ($row[1]);
//extract only the password
$db_password = ($row[2]);

if ($db_email == $email and $db_password == $password) {
    echo '<script>alert("Welcome ' . $_SESSION['user'] . ' ");
              window.location="../dashboard.php";
              </script>';
} else {
    echo '<script>alert("Invalid Username or Password");
              window.location="../forms/login.html";
              </script>';

}
