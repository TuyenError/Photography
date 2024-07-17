$(document).ready(function () {
  if (window.jQuery) {
    console.log("jQuery is loaded!");
  } else {
    console.log("jQuery is not loaded!");
  }
  if ($.validator) {
    console.log("jQuery Validator is loaded!");
  } else {
    console.log("jQuery Validator is not loaded!");
  }

  // Add custom validation methods
  $.validator.methods.checkPhone = function (value, element) {
    return (
      this.optional(element) ||
      /([\+84|84|0]+(3|5|7|8|9|1[2|6|8|9]))+([0-9]{8})\b/.test(value)
    );
  };

  $.validator.methods.checkEmail = function (value, element) {
    return (
      this.optional(element) ||
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
        value
      )
    );
  };

  // Initialize validation
  $("#myform").validate({
    rules: {
      username: {
        required: true,
        minlength: 3,
        maxlength: 11,
      },
      email: {
        required: true,
        checkEmail: true,
      },
      phone_number: {
        required: true,
        checkPhone: true,
      },
      subject: {
        required: true,
      },
      message: {
        required: true,
      },
    },
    messages: {
      username: {
        required: "Please fill in your username",
        minlength: "Please enter at least {0} characters",
        maxlength: "Please enter a maximum of {0} characters",
        alpha_numericRegex: "Enter only alphanumeric characters",
      },
      email: {
        required: "We need your email address to contact you",
        checkEmail: "Please enter your email in the format yam532004@gmail.com",
        remote: "Email already in use!",
      },
      phone_number: {
        required: "Please provide your phone number",
        checkPhone: "Please enter a valid 10-digit phone number",
      },
      subject: {
        required: "Please provide a subject",
      },
      message: {
        required: "Please provide a message",
      },
    },
    errorPlacement: function (error, element) {
      error.appendTo(element.siblings("span.error")); // Append error message to sibling span.error
    },
    highlight: function (element) {
      $(element).addClass("error"); // Add 'error' class to invalid elements
    },
    unhighlight: function (element) {
      $(element).removeClass("error"); // Remove 'error' class from valid elements
    },
    submitHandler: function (form) {
      // Execute reCaptcha and submit form
      grecaptcha.ready(function () {
        grecaptcha
          .execute("6LeQIAEqAAAAAOmPO-298SpcJ4A_Drenp-SZDEbS", {
            action: "register",
          })
          .then(function (token) {
            document.getElementById("token").value = token;
            console.log(token);
            form.submit();
          });
      });
    },
  });
});
