<?php
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $userdata = $_POST;
    // $data = implode(" ",$userdata);
$user = [
    "name" => "$username", "email" => "$email", "password" => "$password",
];


// print_r($user);
    $file = "../storage/users.csv" ;
    $handle = fopen($file, "a");
    $fputcsv = fputcsv($handle, $user);
    fclose($handle);
    if($fputcsv){
        echo " <script>alert('User Successfully registered');
        window.location='../forms/login.html';
    </script>";


    // print_r($userdata);

}

// registerUser($username, $email, $password);



// $userdata = $_POST;
// $data = implode(" ",$userdata);
// $file = "./userdata.csv" ;
// $handle = fopen($file, "a");
// fwrite($handle, "$data");
// fclose($handle);
// print_r($userdata);



function registerUser($username, $email, $password){
    //save data into the file
    
    // echo "OKAY";
}
// echo "HANDLE THIS PAGE";

// print_r($_POST) ;
// echo "$data";


