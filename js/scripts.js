function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}

$(document).ready(function() {
  $(".change-login-info").click(function(event) {
    $("#change-login-info").fadeToggle();
    var oldPassword=$("#oldpass").val();
    var newPassword=$("#newpass").val();
    var confirmNewPass=$("#confirm-newpass").val();
    event.preventDefault();
  });
  $(".reset").click(function(event){
    $("#change-login-info").fadeToggle();
    alert("Login info change successfull!")
  });
});
