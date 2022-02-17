<?php

//    YOU ONLY NEED TO RUN THIS ONCE PER USER PER DATABASE
//    Create the test@cwi.edu in test db
//    Create the test@cwi.edu in my_guitar_shop2 but change firstName & lastName to allow nulls

$dsn = 'mysql:host=localhost;dbname=kGreeneGuitarWorld';
$username = 'root';
$password = 'Pa$$w0rd';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error = $e->getMessage();
    include('view/error.php');
    exit();
}
    $email = 'sparkles@cwi.edu';
    $password = 'sesame';
    $firstName = 'Sparkles';
    $lastName = 'Unicorn';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO administrators (emailAddress, password, firstName, lastName)
              VALUES (:email, :password, :firstName, :lastName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->execute();
    $statement->closeCursor();

    echo "Inserted: $email pw: $password hash: $hash<br>"


?>

