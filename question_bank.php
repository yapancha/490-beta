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

<link rel="stylesheet" href="css/question_bank.css">
<div id = "question-content">
   

  <!-- load questions dynamically from database upon pageload -->
  <!-- container for the questions already created -->
    <div id = "questions">
            <p class = "question-block-title">Question Bank</p>

            <?php        
                $arr  = json_decode($result,true);  
                $questions = $arr["question_list"];
                foreach($questions as $question) { 

                   echo '<div class = "question">';
                   echo '<span>'.$question["summary"].'</span></div>';
                }
            ?>

       
    </div>
 
    
    <!-- container for selected questions -->
    <div id = "question-create-container">
        <p class = "question-block-title"> Create Question</p>
        <form action="question_bank.php" id="question-create">
            
            Question: <input type="text"><br>
            Function Name: <input type="text"><br>
            Function Parameters: <input type="text"><br>
            Test Cases: <select name="" id="number-test-cases" onchange = "getIndex()">
                <option value="1">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select><br>
            <div id = "question-test-cases">
                
            </div>

            
        </form>

    </div>

</div>

<div id  = "rr" style = "color:white"></div>

    </body>
    <script src="js/question_bank.js"></script>

</html>
