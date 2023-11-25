// Example animation on button click
const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        button.style.transform = 'scale(1.1)';
        setTimeout(() => {
            button.style.transform = 'scale(1)';
        }, 300);
    });
});

// JavaScript function to update the hidden input field
function updateSelectedSubject() {
    var selectedSubject = document.getElementById("subject").value;
    document.getElementById("selectedSubject").value = selectedSubject;
    console.log("Selected Subject: " + selectedSubject);  // Add this line for debugging
}