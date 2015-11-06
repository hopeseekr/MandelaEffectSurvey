/**
 * Created by tsmith on 11/5/2015.
 */

window.sectionId = 1;

function fetchSurveySection() {
    $.ajax('app.php?context=survey&action=getSurveySection&sectionId=' + window.sectionId)
        .done(function(html) {
            $('#survey').append(html);
            window.sectionId += 1;
        });
}

$('#survey').on('click', '.nextSection', function() {
    $(this).hide();
    fetchSurveySection();
    return false;
});