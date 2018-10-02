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
                
                if(login.njit == 1 && login.db == 0){
                    
                    njit.innerHTML = "<p>NJIT login sucessful</p>";
                    njit.style.color = "green"; 
                    db.innerHTML = "<p>Database login unsucessful</p>";
                    db.style.color = "red";
                    
                }else if(login.njit == 0 && login.db == 1){
                    njit.innerHTML = "<p>NJIT login unsucessful</p>";
                    njit.style.color = "red"; 
                    db.innerHTML = "<p>Database login sucessful</p>";
                    db.style.color = "green";
                }else{
                    njit.innerHTML = "<p>NJIT login unsucessful</p>";
                    njit.style.color = "red"; 
                    db.innerHTML = "<p>Database login unsucessful</p>";
                    db.style.color = "red";                
                }
            }
        };
        xhttp.open("POST", "login.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&password="+password+"");
    }
});
