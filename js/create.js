$(document).ready(function () {
  $("#submit").click(function () {
    var username = $("#myusername").val();
    var password = $("#mypassword").val();
    var email = $("#myemail").val();
    var repwd = $("#retypepwd").val();
    var phone = $("#myphone").val();
    var address = $("#myaddress").val();

    if (email == "" || password == "" || username == "") {
      $("#message").html(
        '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Please enter all the fields</div>'
      );
    } else if (!ValidateEmail(email)) {
      $("#message").html(
        '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Enter valid Email. </div>'
      );
    } else {
      $.ajax({
        type: "POST",
        url: "createuser.php",
        data:
          "&myusername=" +
          username +
          "&myemail=" +
          email +
          "&mypassword=" +
          password +
          "&myphone=" +
          phone +
          "&myaddress=" +
          address,
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
$("#retypepwd").on("keyup", function () {
  if ($(this).val() == $("#mypassword").val()) {
    $("#message").html("").css("color", "red");
    document.getElementById("submit").disabled = false;
  } else {
    document.getElementById("submit").disabled = true;
    $("#message").html("Passwords don't match").css("color", "red");
  }
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
