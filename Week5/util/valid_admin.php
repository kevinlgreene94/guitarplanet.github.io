<!--#Original Author: Kevin Greene #
#Date Created: 2/16/2022 #
#Version:  1 #
#Date Last Modified: 2/16/2022 #
#Modified by:  Kevin Greene #
#Modification log: 2/16/2022 Created valid admin and linked to admin and list employees. 
                              
    -->
<?php
require_once('database/database.php');
require_once('database/admin_db.php');

$email = '';
$password = '';    
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    $email = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];    
}

if (!is_valid_admin_login($email, $password)) {
    header('WWW-Authenticate: Basic realm="Admin"');
    header('HTTP/1.0 401 Unauthorized');
    $error = 'Invalid credentials. Please Try Again.';
    include('error.php');
    exit();
}
?>
