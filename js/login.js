//Yash Panchal
//front-end
//Team members: Corey Abma, Zachary Propert

//JS file for ajax call and updating the form.

document.getElementById("login-button").addEventListener("click", function (){  
    
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var njit   = document.getElementById("njit");
    var db   = document.getElementById("db");

    if(username == "" || password == "" ){
        njit.innerHTML = "Please enter BOTH username and password";
        njit.style.color = "white";
        db.innerHTML = "";
    }else{
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("content").innerHTML =this.responseText;
                var login = JSON.parse(this.responseText);
      
            }
        };
        xhttp.open("POST", "login.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&password="+password+"");
    }
});
