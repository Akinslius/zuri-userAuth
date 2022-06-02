<?php
//get user input
$email = $_POST['email'];
$password = $_POST['password'];

$path = "../storage/users.csv"; //file path
$open = fopen($path, "r");
// read the entire file into a string
$file = file_get_contents("../storage/users.csv");
//check if data match with data in csv
if ($f = strstr($file, $email) and strstr($file, $password)) {

//if yes, start a session
    session_start();
//converting csv into multidimentional array
    $csv = array_map('str_getcsv', file('../storage/users.csv'));
//column for name
    $c_name = array_column($csv, 0);
//column for email
    $c_email = array_column($csv, 1);
//search the array row using the email in the email column, return the key
    $search = array_search($email, $c_email);
//save the row where the user is present in the variable
    $row = ($csv[$search]);
//extract only the name
    $_SESSION['user'] = ($row[0]);

    echo '<script>alert("Welcome ' . $_SESSION['user'] . ' ");
          window.location="../dashboard.php";
          </script>';
} else {
    echo '<script>alert("Invalid Username or Password");
          window.location="../dashboard.php";
          </script>';

}

?>



    // foreach($csv as $data){
    // // print_r($data[0]);
    // // print_r($data);





    // while (($data = fgetcsv($open))){
    //           if (
    //             $arr= in_array($email,$csv)){
    //                 echo "found";
    //                 break;


    //             }else{
    //                 echo "no";
    //                 break;
    //             }
    //         }



    // if($data[$c_email] == $email){
    //     echo "my {$data[$c_email]}. my name is{{$data[0]}} ";
    // }
    // else{
    //     echo "failed";
    // }



    // print_r($c);
    // print_r($c[0]);

// $arr = in_array($email,$csv);


    // print_r($arr);









        //     $f = "../storage/users.csv"; //file path
        //    $open = fopen($f, "r"); //open file in read mode
        //     // $data = fgetcsv($open);
        //     $content = fread($open, filesize($f)); //read file

        //    $e= explode(" ",$file);


        //     print_r($e);
        //     // foreach($csv as $d){

        //     // }
        //     // $s= in_array(array($email),$csv);

















    // function loginUser($password){
    //     if($password){
    //         echo "yes ma";
    //     }else{
    //         echo "no sir";
    //     }

    // }


// $csv = array_map('str_getcsv', file('../storage/users.csv'));
<!-- // // echo '<pre>'; print_r($csv);
// //     echo '<br>'; -->

// //create array
// foreach($csv as $row){
//     if(in_array(array(array($email))), $row){
//         echo "found";
//     }else{
//         echo "not found";
//     }
//     break;
// }

// fclose($open);
// print_r($row);

//     $file = "../storage/users.csv"; //file path
//     $open = fopen($file, "r"); //open file in read mode

//   while (($data = fgetcsv($open))){
//       if (
//         $arr= in_array("$email",$data, TRUE)){
//             echo "found";

//         }else{
//             echo "not found";
//         }



//     break;

//   }
//   fclose($open);

<!-- //     // echo '<pre>';  -->
    //  print_r($);
//    echo $email;
// }

// print_r($arr);
    // $content = fread($open, filesize($file)); //read file

    // $input_data = implode(" ", $userdata);
    //convert user input which is in array into string
    // $arr = explode(" ", $content);//convert .csv into array

// print_r($data);

    // print_r($userdata);
    // echo "\n";
    <!-- // echo '<pre>'; print_r($input_data); -->
    // echo "\n";
    // print_r($arr);
    // foreach($arr as $data){
    <!-- // //    echo '<pre>'; print_r($data);
    //    echo '<br>';
        // if($data == $email){
        //     echo "yes";
        // }else{
        //     echo "no";
        // } -->



    //   echo $content;
    //  print_r($arr);



<!-- // $file = fopen("../storage/users.csv","r");
// while (($data = fgetcsv($file)) !==FALSE){
//     echo '<pre>'; print_r($data);
//     echo '<br>';
// }

// $file = fopen("../storage/users.csv","r");
// while(($data = fgetcsv($file,1000,",")) !==FALSE){
//     $count = count($data);
//     echo $count;
//     echo '<pre>'; print_r($data);
//     echo '<br>';
// }

// $file = fopen("../storage/users.csv","r");
// while (($data = fgetcsv($file)) !==FALSE){
//     if(in_array($email, $data)){
//         foreach($data as $i){
//             echo $i;
//         }


//     }


//     // echo '<pre>'; print_r($data);
//     // echo '<br>';
// }

// fclose($file);


    // $data = explode(" ",$userdata);

    // echo "$data";



// loginUser($email, $password);
 -->


// function loginUser($email, $password){
    /*
        Finish this function to check if username and password
    from file match that which is passed from the form
    */
