<?php

    $data = json_decode(file_get_contents('php://input'),true);
    
    echo ("exam name is: ". $data["exam_name"]);//SUCESSFULLY PRINTED THE TEST NAME 
    echo ("selected questions: ".$data['questions'][0]. " and ".$data['questions'][1]);
?>