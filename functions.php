<?php
       //curl sends json of the created exams with the questions
     //  $json = file_get_contents('php://input');
       
   $json = $_POST["exam"];
  

    $ch = curl_init();

    $curlConfig = array(
        CURLOPT_URL =>"http://localhost:8888/frontend/backguy.php",
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
       // CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_POSTFIELDS     => $json,
        CURLOPT_HTTPHEADER     => array( 
                                 'Content-Type: application/json', 
                                 'Content-Length: ' . strlen($json)),
    );
    curl_setopt_array($ch, $curlConfig);
    $result = curl_exec($ch);
    
    echo $result;
          
        
?>