/**
 *
 * -----------------------------------------------------------------------------
 *
 * Template : Techno Engineering Pvt. Ltd.
 * Contact Form Handler with AJAX & JSON Response
 *
 * -----------------------------------------------------------------------------
 *
 **/

(function ($) {
  "use strict";

  // Generic form handler function
  function handleFormSubmit(formSelector) {
    var form = $(formSelector);

    if (form.length === 0) return;

    form.submit(function (e) {
      // Stop the browser from submitting the form.
      e.preventDefault();

      // Get submit button
      var submitBtn = form.find('button[type="submit"]');
      var originalBtnText = submitBtn.find(".btn-text").text();

      // Show loading state
      submitBtn.prop("disabled", true);
      submitBtn.find(".btn-text").text("Sending...");

      // Serialize the form data.
      var formData = form.serialize();

      // Submit the form using AJAX.
      $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: formData,
        dataType: "json",
      })
        .done(function (response) {
          // Reset button state
          submitBtn.prop("disabled", false);
          submitBtn.find(".btn-text").text(originalBtnText);

          if (response.success) {
            // Success - show alert and reset form
            alert("✅ " + response.message);

            // Clear all form fields
            form[0].reset();
          } else {
            // Error from server
            alert("❌ " + response.message);
          }
        })
        .fail(function (xhr, status, error) {
          // Reset button state
          submitBtn.prop("disabled", false);
          submitBtn.find(".btn-text").text(originalBtnText);

          // Network or server error
          alert(
            "❌ Oops! An error occurred. Please try again or contact us at +91 98337 71515.",
          );
          console.error("Form submission error:", error);
        });
    });
  }

  // Initialize all forms
  handleFormSubmit("#contact-form");
  handleFormSubmit("#quote-form");
})(jQuery);
