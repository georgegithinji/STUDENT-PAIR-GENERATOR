$(document).ready(function() {
  $(".change-login-info").click(function(event) {
    event.preventDefault();
    $("#change-login-info").fadeToggle();
  });
  $(".reset").click(function(event){
    $("#change-login-info").fadeToggle();
    alert("Login info change successfull!")
  });
});
