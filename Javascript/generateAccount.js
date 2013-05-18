var username;
var password;
var accountId;

/* Not implemented yet
function generateNewAccount() {
	OANDA.user.register_zero('USD', function(userResponse) {
		username = userResponse.username;
		password = userResponse.password;
		getAccountId(username);
	});
}

function getAccountId(username) {
	OANDA.account.list(username, function(response) {
		accountId = response[0].id;
	});
}
*/

function generateNewAccount() {
	OANDA.account.register( function(regResponse) {
		username = regResponse.username;
		password = regResponse.password;
		accountId = regResponse.accountId;
	})
}

function alertUser() {
	if(window.username == undefined || window.password == undefined || window.accountId == undefined) {
		alertify.labels.ok = "Okay";
		alertify.alert("Ops, something went wrong. <br /><br />Please try again.<br /><br />");
	} else {
		alertify.labels.ok = "Show account information";
		alertify.confirm("Username: " + window.username + "<br /><br />Password: " + window.password + "<br /><br />Account ID: " + window.accountId + "<br /><br />", function(e) {
			if(e) {
				window.location = "./accountInfo.php?accountId=" + window.accountId;
			}
		});
	}
}

function popup() {
	generateNewAccount();
	setTimeout(alertUser, 500);
}