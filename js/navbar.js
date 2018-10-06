var items = document.getElementsByClassName("menu-item");

for(var i = 0; i<items.length; i++ ){
    items[i].addEventListener("click", function(){
        this.className = "active";
    });
}