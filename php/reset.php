<?php

$email = $_POST['email'];
$password = $_POST['password'];

//converting csv into multidimentional array
$csv = array_map('str_getcsv', file('../storage/users.csv'));
//column for name
// $c_name = array_column($csv, 0);
//column for email
$c_email = array_column($csv, 1);
//search the array row using the email in the email column, return the key
$search = array_search($email, $c_email);
//save the row where the user is present in the variable
$row = ($csv[$search]);
//extract only the password and replace with new password
$row[2] = $password;
//new user data in array data type
$new = $row;
// replace the array using the key(i.e $search)
$csv[$search] = $new;

// $new_csv = implode(",", $csv);

$path = "../storage/users.csv"; //file path
$open = fopen($path, "w");
foreach ($csv as $insert) {
    $confirm = fputcsv($open, $insert);
}
if ($confirm) {
    echo " <script>alert('Password Reset successful');
        window.location='../forms/login.html';
    </script>";
} else {
    echo " <script>alert('User does not exist');
        window.location='../forms/login.html';
    </script>";
}
fclose($open);

// echo '<pre>'; print_r($csv);
// echo '<br>';

//
// unset([$search]);

//     resetPassword($email, $password);

// function resetPassword($email, $password){
//     //open file and check if the username exist inside
//     //if it does, replace the password
// }
// echo "HANDLE THIS PAGE";
