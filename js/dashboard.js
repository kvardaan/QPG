<script>
$(document).ready(() => {
    const branch_select = document.getElementById('branch_select');
    const batch_select = document.getElementById('batch_select');
    const year_select = document.getElementById('year_select');

    let college_id = '';
    let program_id = '';
    let branch_id = '';
    let batch_id = '';
    let year_id = '';
    let type = '';

    // colleges select
    $('#colleges').change(() => {
        college_id = $('#colleges').val();
        year_id = '';
        $.post('action.php', {
            college_id: college_id
        }, (response) => {
            if (response) {
                let output = '';
                let programs = JSON.parse(response);
                programs.forEach(element => {
                    output += element;
                });

                $('#programs').html(output);

                // if(program_select.style.display == 'none') {
                //     $('#program_select').css('display', 'block');
                // }
            }
        });
    });

    // programs select
    $('#programs').change(() => {
        program_id = $('#programs').val();
        year_id = '';
        $.post('action.php', {
            getBranch: true,
            program_id: program_id
        }, (response) => {
            if (response) {
                let output = '';
                let responseData = JSON.parse(response);
                let branches = responseData;

                branches.forEach(element => {
                    output += element;
                });
                $('#branches').html(output);

                if (branch_select.style.display == 'none') {
                    $("#branch_select").show('slow');

                }

                branch_id = '';
            }
        });
    });

    // branches select
    $('#branches').change(() => {
        branch_id = $('#branches').val();

        $.post('action.php', {
            getBatch: true,
            branch_id: branch_id,
            program_id: program_id
        }, (response) => {
            if (response) {
                console.log(response);
                let batches = JSON.parse(response);
                output = '';
                batches.forEach(element => {
                    output += element;
                });

                $('#batches').html(output);
            }
        })
        // if (year_id != '') {
        //     getSyllabus();
        // }

        if (batch_select.style.display == 'none') {
            $("#batch_select").show('slow');
        }

    });

    // batches select
    $('#batches').change(() => {
        batch_id = $('#batches').val();

        $.post('action.php', {
            batch_id: batch_id
        }, (response) => {
            if (response) {
                let output = '';
                let years = JSON.parse(response);
                years.forEach(element => {
                    output += element;
                });

                $('#years').html(output);

                if (year_select.style.display == 'none') {
                    $("#year_select").show('slow');
                    // $('#year_select').css('display', 'block');
                }
            }
        });
    });

    // branches select
    $('#years').change(() => {
        year_id = $('#years').val();

        if (branch_id != '') {
            getSyllabus();
        } else {
            $('#branchAlert').css('display', 'block');
            setTimeout(() => {
                $('#branchAlert').css('display', 'none');
            }, 3000);
        }
    });

    // to get syllabus
    const getSyllabus = () => {
        $('#pdf-failed').css('display', 'none');
        $('#pdf').css('display', 'none');
        intervalFunction();
        // $("#pdf-process").show('slow');
        // $('#pdf-process').css('display', 'block');

        $.post('action.php', {
            type: true,
            year_id: year_id,
            branch_id: branch_id
        }, (response) => {
            if (response) {
                // $('#pdf-process').css('display', 'none');
                // clearInterval(interval);
                $('#pdf-failed').css('display', 'none');
                $("#pdf").show('slow');
                // $('#pdf').css('display', 'block');

                const path = 'media/syllabus/';
                pdfViewer(path, JSON.parse(response));

            } else {
                // $('#pdf-process').css('display', 'none');
                // clearInterval(interval);
                $('#pdf').css('display', 'none');
                // $('#pdf-failed').css('display', 'block');
                $('#pdf-failed').show('slow');
            }
        });
    }

    // pdfobejct library function
    const pdfViewer = (path, name) => {
        // intervalFunction();
        $("#pdf-process").show('slow');
        setTimeout(() => {
            $("#pdf-process").hide('slow');
            clearInterval(interval);
            window.open(`media/web/viewer.php?pdfName=syllabus/${name}`, "_blank");
        }, 5000);

    }
});
</script>