$(document).ready(function() {

	$("#hideLogin").click(function() {
		$("#loginform").hide();
		$("#RegisterForm").show();
	});

	$("#hideRegister").click(function() {
		$("#loginform").show();
		$("#RegisterForm").hide();
	});
});