<!DOCTYPE html>

<html>
	
	<header>
		<title>OANDA Account Manager</title>
        <link rel="stylesheet" type="text/css" href="./CSS/generateAccount.css" />
        <link rel="stylesheet" type="text/css" href="./CSS/alertify.css" />
        <script src="./Javascript/alertify.js/lib/alertify.js"></script>
        <script src="./Javascript/generateAccount.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://developer.oanda.com/oandajs/oanda.js"></script>
	</header>
	
	<body>
		<div id="mainContainer">
			<label id="headerTitle">OANDA Account Manager</label>
			<a href="javascript:void(0)" onclick="popup()" class="generateButton"><b>Generate Account</b></a>
			<a href="./accountInfo.php" onclick="popup()" class="accountSearchButton"><b>Account ID Search</b></a>
			<a href="javascript:void(0)" onclick="" class="disabled"><b>Search by Username (Disabled)</b></a>
			<a href="javascript:void(0)" onclick="" class="disabled"><b>Account Login (Disabled)</b></a>
			<label id="disclaimerText"><b>Disclaimer:</b> This page was created to demonstrate the use of the OANDA API and is intended for private use only.</label>
			<div class="clear"></div>
		</div>
	</body>

</html>