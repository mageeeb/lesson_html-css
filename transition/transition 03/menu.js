function toggle(){
    "use strict";

    var x=document.querySelector(".menu");

    if (x.className === "menu") {
        x.className += " affiche";      /* on passe de class="menu" à class="menu affiche" */
    } else {
        x.className = "menu";           /* on passe de class="menu affiche" à class="menu" */
    }
}