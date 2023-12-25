$(document).ready(function () {
    let requirementCounter = 1;

    $('#addRequirement').on('click', function (e) {
        e.preventDefault();
        requirementCounter++;

        // Clone the initial requirement template and update attributes
        let newRequirement = $('.requirement:first').clone();
        newRequirement.attr('data-id', requirementCounter);

        newRequirement.find('label').each(function () {
            // Update labels
            let labelText = $(this).text().replace(/\d+/, requirementCounter);
            $(this).text(labelText);
        });

        newRequirement.find('input, textarea').each(function () {
            // Update input and textarea attributes
            let inputName = $(this).attr('name').replace(/\[\d+\]/, `[${requirementCounter}]`);
            let inputId = $(this).attr('id').replace(/\_\d+/, `_${requirementCounter}`);
            
            $(this).attr('name', inputName);
            $(this).attr('id', inputId);
            $(this).val(''); // Clear input values
        });

        $('#requirements-container').append(newRequirement);
    });
});
