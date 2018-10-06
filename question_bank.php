<!-- /* 
Yash Panchal
questions.css
Question-bank page to select and generate a test 
*/ -->



<?php
    include("navbar.php");
?>

<?php
        // make a curl session to get the questions from the database

        $ch = curl_init();
       
        $curlConfig = array(
            CURLOPT_URL =>"https://web.njit.edu/~znp4/CS490/questionbank.php",
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_POSTFIELDS     => "",
        );
        curl_setopt_array($ch, $curlConfig);
        $result = curl_exec($ch);   
     
?>

<html>
<div id = "question-content">
   

  <!-- load questions dynamically from database upon pageload -->
  <!-- container for the questions already created -->
    <div id = "questions">
            <p class = "question-block-title">Questions</p>

            <?php        
                $arr  = json_decode($result,true);  
                foreach($arr as $question) { 

                   echo '<div class = "question"><input type="checkbox" class = "question-select" value = "' .$question["num"].'">';
                   echo '<span>'.$question["summary"].'</span></div>';
                }
                echo "comin from Zach!"
            ?>
            <button id = "question-create-button"><input type="text" id = "question-create-text">Create question</button>

       
    </div>
    <!-- container for buttons in the middle -->
    <div id = "add-button-container">
        <button id="question-add-all" class = "question-btn">>></button>
        <button id="question-remove-all" class = "question-btn"><<</button>
    </div>
    
    <!-- container for selected questions -->
    <div id = "selected">
        <p class = "question-block-title"> Selected Questions</p>
        <input type="text" id = "test-create-name"><button id = "test-create-button">Create test</button>

    </div>

</div>

<div id  = "rr" style = "color:white"></div>

    </body>
    <script src="js/questions.js"></script>

</html>
