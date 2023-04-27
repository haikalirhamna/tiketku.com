let indexshow = 0;
autoTyping();

function autoTyping() {
    let i;
    var content = document.querySelectorAll(".text-typing");

    for (let i = 0; i < content.length; i++) {
        content[i].style.display = "none";
    }
    indexshow++;
      if (indexshow > content.length) {indexshow = 1} 
    content[indexshow-1].style.display = "block";
    setTimeout(autoTyping, 2000);
}