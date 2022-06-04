// Makes FAQ more responsive

var faq = document.getElementsByClassName("faq-page");
var i;
for (i = 0; i < faq.length; i++) {

    // In every click, used to show (and hide) HTML content
    // Sort of like an "accordion"
    faq[i].addEventListener("click", function () {
        this.classList.toggle("active");    
        var body = this.nextElementSibling;  // Return next element in same tree level
        if (body.style.display === "block") {
            body.style.display = "none";    // Change to none
        } else {
            body.style.display = "block";   // Stay as is
        }
    });
}