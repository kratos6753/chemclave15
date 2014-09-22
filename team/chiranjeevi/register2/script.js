$(document).ready(function(){
$("#sign-up-btn").click(function() {
  $("#sign-up-form").show();
  $("#log-in-form").hide();
  $("#payments-form").hide();
  $("#sign-up-btn").addClass("active");
  $("#log-in-btn").removeClass("active");
  $("#payments-btn").removeClass("active");
});

$("#log-in-btn").click(function() {
  $("#sign-up-form").hide();
  $("#log-in-form").show();
  $("#payments-form").hide();
  $("#sign-up-btn").removeClass("active");
  $("#log-in-btn").addClass("active");
  $("#payments-btn").removeClass("active");
});
});