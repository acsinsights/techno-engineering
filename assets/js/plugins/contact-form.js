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

  // Function to show message at top of form
  function showMessage(form, message, isSuccess) {
    // Remove any existing message in this form
    form.find(".form-message-box").remove();

    var bgColor = isSuccess ? "#28a745" : "#dc3545";
    var icon = isSuccess ? "✅" : "❌";

    var messageHtml = `
      <div class="form-message-box" style="
        background: ${bgColor};
        color: white;
        padding: 15px 20px;
        text-align: center;
        font-size: 16px;
        font-weight: 500;
        border-radius: 8px;
        margin-bottom: 20px;
        position: relative;
        animation: fadeIn 0.5s ease;
      ">
        ${icon} ${message}
        <button onclick="this.parentElement.remove()" style="
          position: absolute;
          right: 15px;
          top: 50%;
          transform: translateY(-50%);
          background: transparent;
          border: none;
          color: white;
          font-size: 20px;
          cursor: pointer;
          line-height: 1;
        ">&times;</button>
      </div>
      <style>
        @keyframes fadeIn {
          from { opacity: 0; transform: translateY(-10px); }
          to { opacity: 1; transform: translateY(0); }
        }
      </style>
    `;

    // Insert message at the top of the form
    form.prepend(messageHtml);

    // Scroll to form
    $("html, body").animate(
      {
        scrollTop: form.offset().top - 100,
      },
      500,
    );

    // Auto remove after 8 seconds
    setTimeout(function () {
      form.find(".form-message-box").fadeOut(500, function () {
        $(this).remove();
      });
    }, 8000);
  }

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
            // Success - show message at top of form
            showMessage(form, response.message, true);

            // Clear all form fields
            form[0].reset();
          } else {
            // Error from server
            showMessage(form, response.message, false);
          }
        })
        .fail(function (xhr, status, error) {
          // Reset button state
          submitBtn.prop("disabled", false);
          submitBtn.find(".btn-text").text(originalBtnText);

          // Network or server error
          showMessage(
            form,
            "Oops! An error occurred. Please try again or contact us at +91 98337 71515.",
            false,
          );
          console.error("Form submission error:", error);
        });
    });
  }

  // Initialize all forms
  handleFormSubmit("#contact-form");
  handleFormSubmit("#quote-form");
})(jQuery);
