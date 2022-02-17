<!--#Original Author: Kevin Greene #
#Date Created: 2/11/2022 #
#Version:  1 #
#Date Last Modified: 2/11/2022 #
#Modified by:  Kevin Greene #
#Modification log:  2/04/2022 Created listemployees.php and linked to database
                    
                    2/11/2022 Created database php to link with listemployees and copied database code to new files. 
                              
-->
<?php
require_once('./database/database.php');
require_once('./database/employee.php');
require_once('./util/secure_conn.php');
require_once('./util/valid_admin.php');

$employees = EmployeeDB::getEmployees();
?>


<!DOCTYPE html>
<!--#Original Author: Kevin Greene #
#Date Created: 1/26/2021 #
#Version:  1 #
#Date Last Modified: 1/28/2021 #
#Modified by:  Kevin Greene #
#Modification log: 1/26/2021- #Copied last weeks project to new folder
                              #Placed information into table for better visual design
                              #Created table stylesheet and added styling to new table design
                              #Added image to join.html

                   1/28/2021- #Added FAQ.html, faq.css, faq.js
                              #Keeping styles and js seperate for organization
                              #Improved links to nav and sections

                    2/5/2021  #Improved NavBar  
                    
                    1/28/2022 #Converted to php for databasing 
                              
                              
-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="GuitarPlanet Newsletter">
    <meta name="keywords" content="guitarplanet, guitar newsletter, news, famous guitar">
    <meta name="author" content="Kevin Greene">
    <meta name="viewport" content="width=device-width initial scale=1.0">
    <title>GuitarPlanet&#x1f3b8;</title>

    <!--Stylesheet Links-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/join.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <header class="lighttheme">
            <h1><a href = "index.php"> <img src="images/logo.svg" alt = "logo">Welcome to GuitarPlanet <img src="images/logo.svg"></a></h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home </a></li>
                    <li><a href="index.php#join">Sign Up </a></li>
                    <li><a href="FAQ.php">FAQ's </a></li>
                    <li><a href="contact.php">Contact </a></li>
                    <li><a href="listemployees.php">List of Employees </a></li>
                    <li><a href="admin.php">Admin </a></li>

                </ul>
            </nav>
        </header>

        <div class="lighttheme">
            <h1 id="landing-page">Employee List</h1>
            <br>
            <p>
            <ul>
<?php foreach ($employees as $employee): ?>
                    <li><?php echo $employee->getLastName() . ' ' . $employee->getFirstName() . ' '; ?></li>
                <?php endforeach; ?>
            </ul>
            </p>
        </div>


    </main>

</body>
</html>