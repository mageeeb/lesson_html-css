function toggle() {
    "use strict";

    var x=document.querySelectorAll("#course p");

    x.forEach(elem => {
        if (elem.className === "barre") {
            /* pour passer de class="barre" à class="barre go", càd  .barre => .barre.go  */
            elem.className += " go";
        } else {
            /* pour passer de class="barre go" à class="barre", càd  .barre.go => .barre  */
            elem.className = "barre";
        }
    });
}