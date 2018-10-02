<!-- /* 
Yash Panchal
questions.css
Question-bank page to select and generate a test 
*/ -->
<?php

include("navbar.php");

?>

<div id = "question-content">
   
    <div id = "questions">
            <p class = "question-block-title">Questions</p>
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
    
    <div id = "add-button-container">
        <button id="question-add-all" class = "question-btn">>></button>
        <button id="question-remove-all" class = "question-btn"><<</button>
    </div>
    
    <div id = "selected">
        <p class = "question-block-title"> Selected Questions</p>
    </div>
   

</div>
<div id="question-add-or-make-exam">

    <div id ="make-exam-container"></div>
    <input type="text"><button>Submit test</button>



</div>

    </body>
    <script src="js/questions.js"></script>

</html>