<?php

/* Not yet available. 

File: api.php
Description: This file is intended as a sample application for oandaAPI.php, 
			it is capable of asking users for an account number and then fetching the OANDA API
			for related results.
Developer: Johnny Li

include("./oandaAPI.php");

$api = new oandaAPI;

$get = $_GET['username'];
$post = $_POST['submit'];
$inputFromUser = $_POST['username'];

if(isset($inputFromUser)) {
	$api->retrieveUserProfile($inputFromUser);
} else if(isset($get)) {
	$api->retrieveUserProfile($get);
}

date_default_timezone_set("America/Toronto");

*/
?>

<!--
<html>

    <header>
        <title>User Profile Search</title>
        <link rel="stylesheet" type="text/css" href="./CSS/userProfile.css" />
        <link rel="stylesheet" type="text/css" href="./CSS/alertify.css" />
        <script src="./Javascript/alertify.js/lib/alertify.js"></script>
        <script src="./Javascript/generateAccount.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://raw.github.com/oanda/oandajs/master/oanda.js"></script>
    </header>

    <body>
 
    	<form name="accountSearch" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
			<div id="accountBox">
				<a href="./index.php" id="generateAccount">Back to Account Manager</a>
				<label>Username: </label>
				<input type="text" name="username" />
				<button name="submit" type="submit" />Search </button>
			</div>		
		</form>
		
        <div id="mainContainer">

            <div id="tableHeader">User Profile</div>
                        
            <div id="openTrade">
            	<div id="openTradeTitle">Accounts</div>
            	<?php
				/*
            	if(!isset($post) && !isset($get)) {
            		echo "Please enter a username to begin.";
            	} else if(array_key_exists("code", $api->userProfile)) {
		            echo "Please enter a valid username!";
	            } else if(is_array($api->userProfile) && !isset($api->userProfile['code'])) {
		            foreach($api->userProfile as $element) {
		            	echo "<label>You have ".count($api->userProfile); 
		            	echo count($api->userProfile) <= 1 ? " account " : " accounts ";
		            	echo "in total.<br /><br />";
			            echo "<span class='openTradeListing'>";
			            echo "<label class='username'>Username: ".$inputFromUser."</label><br />"; 
			            echo "<div class='clear'></div>";
			            echo "<label class='accountId'>Account ID: <a href='./accountInfo.php?accountId=".$element['id']."'>".$element['id']."</a></label>";
			            echo "<label class='instrument'>Name: ".$element['name']."</label>";
			            echo "<label class='units'>Home Currency: ".$element['homecurr']."</label>";
			            echo "<label class='direction'>Margin Rate: ".$element['marginRate']."</label>";
			            echo "<div class='clear'></div>";
			            echo "</span>";
		            }
	            }
				*/
	            ?>
            </div>
            
            <div class="clear"></div>
        </div>
        
        <div class="clear"></div>
    </body>

</html>
-->