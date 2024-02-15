// Module for handling form validation
const FormValidationModule = (function($) {
  /**
   * Add or remove error message.
   *
   * @param {string} element_id Element ID to which the message will be added.
   * @param {string} text Error message text.
   * @param {boolean} remove Indicates whether the message should be removed.
   */
  function handleErrorMessage(element_id, text = "", remove = false) {
      const element = $(`#${element_id}`);
      const label = $(`label[for="${element.attr("id")}"]`);

      if (!remove) {
          label.append(`<span class="text-red-400 error-${element.attr("id")}"> *${text}</span>`);
      } else {
          element.parent().find(`.error-${element.attr("id")}`).remove();
      }
  }

  /**
   * Validate input field.
   *
   * @param {string} element_id Element ID to validate.
   * @param {string} text Error message text.
   * @returns {boolean} Indicates if the field is valid.
   */
  function validateInputField(element_id, text) {
      const element = $(`#${element_id}`);

      if (element.val().trim() === '') {
          handleErrorMessage(element_id, "", true);
          handleErrorMessage(element_id, text);
          return false;
      } else {
          handleErrorMessage(element_id, "", true);
          return true;
      }
  }

  /**
   * Validate all form fields.
   *
   * @returns {boolean} Indicates if all fields are valid.
   */
  function validateAllFields() {
      const validationResults = [
          validateInputField('job_title', 'Please enter a job title.'),
          validateInputField('company_name', 'Please enter a company name.'),
          validateInputField('datepicker', 'Please select a date.')
      ];

      return validationResults.every(result => result === true);
  }

  return {
      validateAllFields: validateAllFields
  };
})(jQuery);


// Module for handling salary fields
const SalaryFieldModule = (function($) {
  $(document).ready(function() {
      const $salaryFrom = $('#salary-from');
      const $salaryTo = $('#salary-to');
      const $salaryError = $('#salary-error');
      const $submitButton = $('#submit-button');

      function showError(message) {
          $salaryError.text(message);
          $submitButton.prop('disabled', true).css('opacity', 0.7);
      }

      $salaryFrom.add($salaryTo).on('input', function() {
          const fromValue = parseFloat($salaryFrom.val());
          const toValue = parseFloat($salaryTo.val());

          if (isNaN(fromValue) || isNaN(toValue)) {
              showError('Both values must be numbers.');
              return;
          }

          $salaryError.text('');

          if (fromValue < 0 || toValue < 0) {
              showError('Salary values must be non-negative.');
              return;
          } else {
              if (fromValue >= toValue) {
                  showError('The "from" value must be less than the "to" value.');
                  $salaryFrom.add($salaryTo).css('border-color', 'red');
              } else {
                  $salaryFrom.add($salaryTo).css('border-color', '');
                  $submitButton.prop('disabled', false).css('opacity', 1);
              }
          }
      });
  });
})(jQuery);


// Module for form logic
const FormLogicModule = (function($) {
  $(document).ready(function() {
      $('#jom-add-form').on('submit', function(e) {
          if (!FormValidationModule.validateAllFields()) {
              e.preventDefault();
              return false;
          }
      });
  });
})(jQuery);
