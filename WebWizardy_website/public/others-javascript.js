$(document).ready(function () {
    let requirementCounter = 1;

    $('#addRequirement').on('click', function (e) {
        e.preventDefault(); // Prevent the default form submission behavior
        requirementCounter++;
        let newRequirement = `
            <div class="requirement" data-id="${requirementCounter}">
                <h6>Requirement Title ${requirementCounter}</h6>
                <input type="text" name="title_${requirementCounter}">
                <h6>Requirement Details ${requirementCounter}</h6>
                <input type="text" name="details_${requirementCounter}">
            </div>
            <br> <br>
        `;
        $('#requirements-container').append(newRequirement);
    });
});
