//Program fetch using College
$('#colleges').on('change', function() {
    var c_id = this.value;
    $.ajax({
        url: 'ajax/program.php',
        type: "POST",
        data: {
            college_data: c_id
        },
        success: function(result) {
            $('#programs').html(result);
        }
    })
});

//Branch fetch using Program
$('#programs').on('change', function() {    
    var p_id = this.value;
    $.ajax({
        url: 'ajax/branch.php',
        type: "POST",
        data: {
            program_data: p_id
        },
        success: function(result) {
            $('#branches').html(result); 
        }
    })
});

// // Semester fetch using ProgramDuration and Session
// $('#session, #programs').on('change', function() {
//     var p_duration = this.value,
//         sess_id = this.value;
//     $.ajax({
//         url: 'ajax/semester.php',
//         type: "POST",
//         data: {
//             program_data: p_duration,
//             session_data: sess_id
//         },
//         success: function(result) {
//             $('#semester').html(result);
//         }
//     });
// });

// Semester fetch using Program and Session
// $('#program').on('change', function() {
    // var p_id = $('#program').val();
$('#programs').on('change', function() {    
    var p_id = this.value;
    $.ajax({
        url: 'ajax/semester.php',
        type: "POST",
        data: {
            // session_data: sess_id, 
            program_data: p_id
        },
        success: function(result) {
            $('#semester').html(result);
        }
    })
});


// Subject fetch using Semester
$('#semester').on('change', function() {
    // var p_id = this.value;
    var s_id = this.value;
    $.ajax({
        url: 'ajax/subject.php',
        type: "POST",
        data: {
            // program_data: p_id,
            semester_data: s_id
        },
        success: function(result) {
            $('#subject').html(result);
        }
    })
});