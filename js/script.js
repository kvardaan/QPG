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

// Visible
document.addEventListener('DOMContentLoaded', function () {
    // Get references to all select elements
    var collegeSelect = document.getElementById('colleges');
    var programSelect = document.getElementById('programs');
    var branchSelect = document.getElementById('branches');
    var semesterSelect = document.getElementById('semester');
    var subjectSelect = document.getElementById('subject');
    var container = document.querySelector('.container');

    // Hide all selects except "Select College" initially
    container.style.display = 'block';
    programSelect.style.display = 'none';
    branchSelect.style.display = 'none';
    semesterSelect.style.display = 'none';
    subjectSelect.style.display = 'none';

    // Add event listener to college select
    collegeSelect.addEventListener('change', function () {
        // Hide all other selects
        programSelect.style.display = 'none';
        branchSelect.style.display = 'none';
        semesterSelect.style.display = 'none';
        subjectSelect.style.display = 'none';

        // Show program select only if a college is selected
        if (collegeSelect.value !== "") {
            programSelect.style.display = 'block';
        }
    });

    // Add event listener to program select
    programSelect.addEventListener('change', function () {
        // Hide all other selects
        branchSelect.style.display = 'none';
        semesterSelect.style.display = 'none';
        subjectSelect.style.display = 'none';

        // Show branch select only if a program is selected
        if (programSelect.value !== "") {
            branchSelect.style.display = 'block';
        }
    });

    // Add event listener to branch select
    branchSelect.addEventListener('change', function () {
        // Hide semester select if no branch is selected
        semesterSelect.style.display = branchSelect.value !== "" ? 'block' : 'none';
    });
    // Add event listener to subject select
    semesterSelect.addEventListener('change', function () {
        // Hide subject select if no subject is selected
        subjectSelect.style.display = semesterSelect.value !== "" ? 'block' : 'none';
    });
});
