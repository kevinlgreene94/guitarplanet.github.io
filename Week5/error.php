

<!DOCTYPE html>
<!--#Original Author: Kevin Greene #
#Date Created: 1/29/2021 #
#Version:  1 #
#Date Last Modified: 1/29/2021 #
#Modified by:  Kevin Greene #
#Modification log: 1/29/2021  #Created contact page and copied html from index
                              #****Added inline style to footer for this page only. Footer position necessary****
                   2/5/2021   # Improved NavBar

                   2/17/2021 #Improved mobile view sizing

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
        
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>
        <header class="lighttheme">
            <h1><a href = "index.php"> <img src="images/logo.svg" alt = "logo">Welcome to GuitarPlanet <img src="images/logo.svg"></a></h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home </a></li>
                    <li><a href="index.php #join">Sign Up </a></li>
                    <li><a href="FAQ.php">FAQ's </a></li>
                    <li><a href="contact.php">Contact </a></li>
                    <li><a href="listemployees.php">List of Employees </a></li>
                    <li><a href="admin.php">Admin </a></li>
                    
                </ul>
            </nav>
            </header>

     <main>
         
            
     </main>
        <div class="lighttheme">
            <h1>Error!</h1>
            <p><?php echo $error; ?></p>
        </div>
     
    </body>
    
</html>

