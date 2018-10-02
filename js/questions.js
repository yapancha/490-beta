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
              newDiv.className = "selected-question";
              newDiv.innerHTML = checkboxes[i].nextElementSibling.innerHTML
              document.getElementById('selected').appendChild(newDiv);
              checkboxes[i].parentElement.style.display = "none";
           }
           
        }
        // Return the array if it is non-empty, or null
      });
}
