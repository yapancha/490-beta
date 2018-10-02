//Yash Panchal
//front-end
//Team members: Corey Abma, Zachary Propert


//login.php file handles the forwarding of the data with cURL
<?php   
    // get the username and password from my js file
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $ch = curl_init();

    //send the data to corey, the middle end guy
    $curlConfig = array(
        CURLOPT_URL            =>
                        "https://web.njit.edu/~cta5/cs490/middle.php",
        CURLOPT_POST           => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS     => array(
        'username' => $username,
        'password' => $password,
        )
    );

    curl_setopt_array($ch, $curlConfig);

    $result = curl_exec($ch);

    curl_close($ch);
    //echo the result to JS file
    echo $result;

?>
