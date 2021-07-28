$(document).ready(function () {
  $("#submit").click(function () {
    var email = $(".e").val();
    var password = $("#mypassword").val();

    if (email == "" || password == "") {
      $("#message").html(
        '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Please enter a username and a password </div>'
      );
    } else if (!ValidateEmail(email)) {
      $("#message").html(
        '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Enter valid Email. </div>'
      );
    } else {
      $.ajax({
        type: "POST",
        url: "checklogin.php",
        data: "&myemail=" + email + "&mypassword=" + password,

        success: function (html) {
          if (html == "true") {
            window.location = "index.php";
          } else {
            $("#message").html(html);
          }
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
