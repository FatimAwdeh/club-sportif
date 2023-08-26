//FAQ
function toggleAnswer(index) {
    var buttons = document.querySelectorAll(".question-btn");
    var arrowIcon = buttons[index].querySelector("i");
    var answerDiv = buttons[index].nextElementSibling;

    if (answerDiv.style.display === "none") {
      answerDiv.style.display = "block";
      arrowIcon.classList.add("fa-chevron-up");
      arrowIcon.classList.remove("fa-chevron-down");
    } else {
      answerDiv.style.display = "none";
      arrowIcon.classList.add("fa-chevron-down");
      arrowIcon.classList.remove("fa-chevron-up");
    }
  }