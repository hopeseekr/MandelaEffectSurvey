/**
 * Created by tsmith on 11/5/2015.
 */

window.sectionId = 1;

function fetchSurveySection() {
    $.ajax('/survey/section/' + window.sectionId)
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

var optionNum = 2;
$('#addQuestion').on('click', '.addQuestionOptionButton', function() {
    ++optionNum;
    var $addQuestion = $('form#addQuestion #options');
    var newHTML = $('form#addQuestion #form-group-opt-' + (optionNum - 1)).clone();
    // FIXME: Increment the input id and label for, too...
    newHTML.attr('id', 'form-group-opt-' + optionNum);
    newHTML.find('label').text('Option ' + optionNum + ':');
    newHTML.find('input').val('');
    $addQuestion.append(newHTML);

    $(this).parent().remove();

    return false;
});

