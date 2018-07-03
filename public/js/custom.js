$(".login-alert").click(function (a) {
	var username = $("#login-user").val();
	var password = $("#login-pass").val();
	if (username === "") {
		$("#login-user-alert").text("Please input your username.");
		a.preventDefault();
	} else {
		$("#login-user-alert").text("");
	}
	if (password === "") {
		$("#login-pass-alert").text("Please input your password.");
		a.preventDefault();
	} else {
		$("#login-pass-alert").text("");
	}
})
$(".reg-alert").click(function (b) {
    var username = $("#reg-user").val();
    var email = $("#reg-email").val();
	var password = $("#reg-pass").val();
	var repassword = $("#reg-repass").val();
	if (username === "") {
		$("#error-user").text("Please input your username.");
		b.preventDefault();
	} else {
		$("#error-user").text("");
    }
    if (email === "") {
		$("#error-email").text("Please input your email.");
		b.preventDefault();
	} else {
		$("#error-email").text("");
	}
	if (password === "") {
		$("#error-pass").text("Please input your password.");
		b.preventDefault();
	} else {
		$("#error-pass").text("");
	}
	if (repassword === "") {
		$("#error-repass").text("Please input your password again.");
		b.preventDefault();
	} else {
		$("#error-repass").text("");
	}
	if (password !== repassword) {
		$("#error-repass").text("Please input your password again.");
		b.preventDefault();
	} else {
		$("#error-repass").text("");
	}
})