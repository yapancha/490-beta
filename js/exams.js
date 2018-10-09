var checked;
var btns = document.getElementsByClassName("question-btn");



for(var i = 0; i< btns.length; i++){
    btns[i].addEventListener('click', function () {
        var checkboxes = document.getElementsByClassName("question-select");
        // loop over them all
        for (var i=0; i<checkboxes.length; i++) {
           // And stick the checked ones onto an array...
           if (checkboxes[i].checked) {
              var newDiv = document.createElement('div');
              var ptDiv = document.createElement('input')
              ptDiv.id = checkboxes[i].value;
              ptDiv.size = "3";
              newDiv.className = "selected-question";
              newDiv.id = checkboxes[i].value;
              
               
              document.getElementById('selected').appendChild( newDiv);
              newDiv.innerHTML ='<input type="text" size = "3" placeholder = "pts"></input>  '+ 
                                                    checkboxes[i].nextElementSibling.innerHTML

              checkboxes[i].parentElement.style.display = "none";
           }
           
        }
        // Return the array if it is non-empty, or null
      });
}


document.getElementById("test-create-button").addEventListener("click",function (){

    var questions = document.getElementsByClassName("selected-question");
    var test_name = document.getElementById("test-create-name").value;

    var questions_selected = [];
    for(var i =0; i<questions.length; i++){
        questions_selected.push(questions[i].id);
    }

    var exam_json = {"action":"exam_created", "exam_name": test_name,"questions": questions_selected};
    var str_json = "exam="+(JSON.stringify(exam_json));

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("content").innerHTML =this.responseText;
           // var result = JSON.parse(this.responseText);
                document.getElementById("rr").innerHTML = this.responseText;
               // console.log(JSON.parse(this.responseText));
               console.log((this.responseText))
        }
    };

    xhttp.open("POST", "functions.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(str_json);
});

