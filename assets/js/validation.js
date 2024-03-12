$(document).ready(function () {
	$("#username").on("keyup input", function () {
		checkusername();
	});
	$("#companyname").on("keyup input", function () {
		checkcompanyname();
	});
	$("#practicename").on("keyup input", function () {
		checkpracticename();
	});
	$("#mobile").on("keyup input", function () {
		checkmobile();
	});
	$("#email").on("keyup input", function () {
		checkemail();
	});
	$("#textarea").on("keyup input", function () {
		checktextarea();
	});
	$("#submitbtn").click(function (e) {		
		if (
			!checkusername() &&
			!checkcompanyname() &&
			!checkmobile() &&
			!checkemail() &&
			!checkpracticename() &&
			!checktextarea()
		) {
			console.log("er1");
			$("#message").html(
				`<div class="alert alert-warning">Please fill all required field</div>`
			);
			e.preventDefault();
		} else if (
			!checkusername() ||
			!checkcompanyname() ||
			!checkmobile() ||
			!checkemail() ||
			!checkpracticename() ||
			!checktextarea()
		) {
			$("#message").html(
				`<div class="alert alert-warning">Please fill all required field</div>`
			);
			e.preventDefault();
			console.log("er");
		} else {
			e.preventDefault();
			recaptcha();
			// redirect("<?php echo base_url('contact'); ?>");
		}
	});
});

function checkusername() {
	var pattern = /^[A-Za-z\s]+$/;
	var user = $("#username").val();
	var validuser = pattern.test(user);
	if ($("#username").val().length < 4) {
		$("#username_err").html("Username length is too short");
		return false;
	} else if (!validuser) {
		$("#username_err").html("Username should be a-z ,A-Z only");
		return false;
	} else {
		$("#username_err").html("");
		return true;
	}
}

function checkcompanyname() {
	var pattern = /^[A-Za-z0-9\s]+$/;
	var user = $("#companyname").val();
	var validuser = pattern.test(user);
	if ($("#companyname").val().length < 1) {
		$("#companyname_err").html("Companyname length is too short");
		return false;
	} else if (!validuser) {
		$("#companyname_err").html("Companyname should be a-z, A-Z & 0-9 only");
		return false;
	} else {
		$("#companyname_err").html("");
		return true;
	}
}

function checkpracticename() {
	var user = $("#practicename").val();
	if (user == "" || user == null) {		
		$("#practicename_err").html("Required field.");
		return false;
	} else {
		$("#practicename_err").html("");
		return true;
	}
}

function checkmobile() {
	var mobile = $("#mobile").val();
	if (mobile == ""){
		$("#mobile_err").html("Required field");
		return false;
	} else if (!$.isNumeric($("#mobile").val())) {
		$("#mobile_err").html(", Only number is allowed");
		return false;
	} else if (!intl.isValidNumber()) {
		errorMsg.classList.add("hide");
		$("#mobile_err").html("Format error");
		return false;
	} else {
		$("#mobile_err").html("");
		return true;
	}
}

function checkemail() {
	var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var email = $("#email").val();
	var validemail = pattern1.test(email);
	if (email == "") {
		$("#email_err").html("Required field");
		return false;
	} else if (!validemail) {
		$("#email_err").html("Invalid email");
		return false;
	} else {
		$("#email_err").html("");
		return true;
	}
}
function checktextarea() {
	var pattern = /^[A-Za-z0-9]+$/;
	var user = $("#textarea").val();
	if ($("#textarea").val().length < 1) {
		$("#textarea_err").html("Textarea cannot be empty");
		return false;
	} else {
		$("#textarea_err").html("");
		return true;
	}
}

$(document).ready(function () {
	$("#submitbtn").prop("disabled", true);

	$("#terms").click(function () {
		if ($(this).is(":checked")) {
			$("#submitbtn").prop("disabled", false);
		} else {
			$("#submitbtn").prop("disabled", true);
		}
	});
});
