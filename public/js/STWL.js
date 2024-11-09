const today = new Date().toISOString().split('T')[0];
document.getElementById("date").value = today;

const now = new Date();
const currentTime = now.toTimeString().slice(0, 5); // HH:MM format
document.getElementById("time").value = currentTime;

$(document).ready(function () {
    // Store the initial HTML content of the form section to be duplicated
    let x = $("#myForm").html();
    let coun = 1; // Initialize counter

    function createNewForm() {
        coun++; // Increment counter for each new form section
        let newForm = $(x); // Clone the initial form HTML
        newForm.find(".b3").text(coun); // Update the counter in the cloned form
        return newForm;
    }

    // When clicking the add button, duplicate the form and append after the last .a0
    $(".b1").click(function () {
        $("#myForm").append(createNewForm()); // Append new form after the last one
    });

    // When clicking the delete button, remove the closest form section
    $(document).on("click", ".b2", function () {
        $(this).closest('.a0').remove(); // Remove the closest .a0 container
        updateCounters(); // Update the counter numbers for remaining forms
    });

    // Function to update the counter numbers for all remaining forms
    function updateCounters() {
        $(".a0").each(function (index) {
            $(this).find(".b3").text(index + 1); // Update the .b3 text with the new index (1-based)
        });
        coun = $(".a0").length; // Reset the counter to the current number of forms
    }

    $(".save").click(function () {
        alert("Save Successfully");
    })
    $('.btn-outline-info').click(function () {
        window.location.href = 'stwlRecord';
    })
    $('.btn-outline-danger').click(function () {
        window.location.href = 'stwldele';
    })

    $('.btn-outline-dark').click(function () {
        window.location.href = 'Home';
    })
    $('.btn-outline-success').click(function () {
        window.location.href = 'edit-record/{4}';
    })


   









    document.getElementById('addMore').addEventListener('click', function () {
        const myForm = document.getElementById('myForm');
        const newInputGroup = document.createElement('div');
        newInputGroup.classList.add('a0');
        newInputGroup.innerHTML = `
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text b3">${myForm.children.length + 1}</span>
                        <input type="date" class="form-control" name="date[]">
                        <input type="time" class="form-control" name="time[]">
                        <input type="text" class="form-control" name="conducted_by[]" placeholder="Conducted By">
                        <input type="number" class="form-control" name="no_of_labour[]" placeholder="No Of Labour">
                        <select class="form-select" name="hc_present[]">
                            <option selected>H/C Present</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <input type="text" class="form-control" name="topic[]" placeholder="Topic">
                        <input type="text" class="form-control" name="remarks[]" placeholder="Remarks">
                    </div>
                </div>
            </div>`;
        myForm.appendChild(newInputGroup);
    });



});
