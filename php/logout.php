<?php
function logout(){
session_start();
//remove all session variable
session_unset();
//destroy session
session_destroy();
header('location:../');

    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
}
logout();

