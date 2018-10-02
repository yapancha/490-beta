<!-- /* 
Yash Panchal
questions.css
Question-bank page to select and generate a test 
*/ -->
<?php

include("navbar.php");

?>

<div id = "question-content">
    <div id = "question-create">
        <input type="text" id="question-create-text">
        <button id = "question-create-submit">submit</button>
    </div>
    <div id = "questions">
            questions
            <div class = "question"><input type="checkbox" class = "question-select" value = "1"> 
                <span>Create a python function add() that returns a + b
                </span>
            </div>
            <div class = "question"><input type="checkbox" class = "question-select" value = "2"> 
                <span>Create a python function subtrac() that returns a - b
                </span>
            </div>
            <div class = "question"><input type="checkbox" class = "question-select" value = "3"> 
                <span>Create a python function mult() that returns a * b
                </span>
            </div>
       
    </div>
    
    <div id = "add-button">
        <button class = "question-btn">>></button>
        <button class = "question-btn"><<</button>
    </div>
    
    <div id = "selected">
        selected questions
        <input type="text"><button>Submit test</button>
    </div>
   

</div>

    </body>
    <script src="js/questions.js"></script>

</html>