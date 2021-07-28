$(document).ready(function () {
  $("#submit").click(function (e) {
    e.preventDefault();

    var name = $("input#name").val();
    var email = $("input#email").val();
    var phone = $("input#phone").val();
    var message = $("textarea#message").val();

    if (email == "" || name == "" || phone == "" || message == "") {
      $("#error-alert").html(
        '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Please fill all the feilds. </div>'
      );
    } else if (!ValidateEmail(email)) {
      $("#error-alert").html(
        '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Enter valid Email. </div>'
      );
    } else {
      $.ajax({
        type: "POST",
        url: "sendform.php",
        data:
          "&name=" +
          name +
          "&email=" +
          email +
          "&phone=" +
          phone +
          "&message=" +
          message,
        success: function (html) {
          $("#error-alert").html(html);
        },
        complete: function () {
          $("input#name").val("");
          $("input#email").val("");
          $("input#phone").val("");
          $("textarea#message").val("");
        },
      });
    }
    return false;
  });
});
function ValidateEmail(mail) {
  if (
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
      mail
    )
  ) {
    return true;
  }
  return false;
}
