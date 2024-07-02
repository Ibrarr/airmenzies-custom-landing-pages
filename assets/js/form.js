jQuery(document).ready(function($){
    function disableNextButton(formId, buttonSuffix, disable) {
        $('#gform_next_button_' + formId + '_' + buttonSuffix).prop('disabled', disable);
    }

    function disableSubmitButton(formId, disable) {
        $('#gform_submit_button_' + formId).prop('disabled', disable);
    }

    function setupRadioButtonChange(formId, inputSuffix, buttonSuffix) {
        $(document).on('change', '#input_' + formId + '_' + inputSuffix + ' input:radio', function() {
            const isDisabled = !$('#input_' + formId + '_' + inputSuffix + ' input:radio:checked').length;
            disableNextButton(formId, buttonSuffix, isDisabled);
            if (!isDisabled) {
                $('#gform_next_button_' + formId + '_' + buttonSuffix).trigger('click');
            }
        });
    }

    function setupFormPageLoaded(formId) {
        $(document).on('gform_page_loaded', function(event, form_id, current_page){
            if(form_id == formId) {
                if(current_page == 2) {
                    setupRadioButtonChange(formId, '12', '7');
                    disableNextButton(formId, '7', !$('#input_' + formId + '_12 input:radio:checked').length);
                }

                if(current_page == 3) {
                    disableSubmitButton(formId, true);

                    function checkFieldsAndToggleSubmitButton() {
                        let allFieldsFilled = $('#input_' + formId + '_13 option:selected').val() !== '' &&
                            $('#input_' + formId + '_10').val() !== '' &&
                            $('#input_' + formId + '_14').val() !== '' &&
                            $('#input_' + formId + '_15').val() !== '' &&
                            $('#input_' + formId + '_16').val() !== '' &&
                            $('#input_' + formId + '_17').val() !== '' &&
                            $('#input_' + formId + '_18_1').is(':checked');

                        disableSubmitButton(formId, !allFieldsFilled);
                    }

                    $('#input_' + formId + '_13, #input_' + formId + '_10, #input_' + formId + '_14, #input_' + formId + '_15, #input_' + formId + '_16, #input_' + formId + '_17').change(checkFieldsAndToggleSubmitButton);
                    $('#input_' + formId + '_18_1').change(checkFieldsAndToggleSubmitButton);

                    checkFieldsAndToggleSubmitButton();
                }
            }
        });
    }

    function setupButtonLoadingState(formId) {
        $(document).on('click', '.gform_next_button, .gform_previous_button, #gform_submit_button_' + formId, function() {
            let $button = $(this);
            setTimeout(function() {
                $button.val('Loading...').prop('disabled', true);
            }, 50);
        });
    }

    disableNextButton(1, '5', true);
    setupRadioButtonChange(1, '3', '5');
    setupFormPageLoaded(1);
    setupButtonLoadingState(1);

    disableNextButton(2, '5', true);
    setupRadioButtonChange(2, '3', '5');
    setupFormPageLoaded(2);
    setupButtonLoadingState(2);

    disableNextButton(3, '5', true);
    setupRadioButtonChange(3, '3', '5');
    setupFormPageLoaded(3);
    setupButtonLoadingState(3);
});