<!--#Original Author: Kevin Greene #
#Date Created: 2/16/2022 #
#Version:  1 #
#Date Last Modified: 2/16/2022 #
#Modified by:  Kevin Greene #
#Modification log: 2/16/2022 Created secure connection file and added to list employees and admin pages 
                              
    -->
<?php
    // make sure the page uses a secure connection
    $https = filter_input(INPUT_SERVER, 'HTTPS');
    if (!$https) {
        $host = filter_input(INPUT_SERVER, 'HTTP_HOST');
        $uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
        $url = 'https://' . $host . $uri;
        header("Location: " . $url);
        exit();
    }
?>