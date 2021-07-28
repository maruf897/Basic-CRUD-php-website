$(document).ready(function () {
  $("#submit").click(function () {
    var charityname = $("#charityname").val();
    var charitytype = $("#charitytype").val();
    var charitydescription = $("#charitydescription").val();
    var charitydate = $("#charitydate").val();
    var charitygoals = $("#charitygoals").val();
    var charityfund = $("#charityfund").val();
    var charityaddress = $("#charityaddress").val().toLowerCase();

    if (
      charityname == "" ||
      charitytype == "" ||
      charitydescription == "" ||
      charitydate == "" ||
      charitygoals == "" ||
      charityfund == "" ||
      charityaddress == ""
    ) {
      $("#message").html(
        '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Please enter all the fields</div>'
      );
    } else {
      $.ajax({
        type: "POST",
        url: "createcharity.php",
        data:
          "&charityname=" +
          charityname +
          "&charitytype=" +
          charitytype +
          "&charitydescription=" +
          charitydescription +
          "&charitydate=" +
          charitydate +
          "&charityfund=" +
          charityfund +
          "&charityaddress=" +
          charityaddress +
          "&charitygoals=" +
          charitygoals,
        success: function (html) {
          $("#message").html(html);
        },
        complete: function () {
          $("#charityname").val("");
          $("#charitytype").val("");
          $("#charitydescription").val("");
          $("#charitydate").val("");
          $("#charitygoals").val("");
          $("#charityfund").val("");
          $("#charityaddress").val("");
        },
      });
    }

    return false;
  });
});
