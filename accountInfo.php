<?php

/* 

File: api.php
Description: This file is intended as a sample application for oandaAPI.php, 
			it is capable of asking users for an account number and then fetching the OANDA API
			for related results.
Developer: Johnny Li

*/

include("./oandaAPI.php");

$api = new oandaAPI;

$get = $_GET['accountId'];
$post = $_POST['submit'];
$inputFromUser = $_POST['accountId'];

if(isset($inputFromUser)) {
	$api->retrieveAccount($inputFromUser);
	$api->retrieveTrades($inputFromUser);
} else if(isset($get)) {
	$api->retrieveAccount($get);
	$api->retrieveTrades($get);
}
?>

<html>

    <header>
        <title>Account ID Search</title>
        <link rel="stylesheet" type="text/css" href="./CSS/accountInfo.css" />
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
				<label>Account Number: </label>
				<input type="text" name="accountId" />
				<button name="submit" type="submit" />Search </button>
			</div>		
		</form>
		
        <div id="mainContainer">

            <div id="tableHeader">Account Information</div>

            <div id="table">
                <div class="outputTitle">Account ID:</div>
                <div class="outputRow"><?php echo $api->accountId; ?></div>

                <div class="outputTitle">Account Name:</div>
                <div class="outputRow"><?php echo ucfirst($api->accountName); ?></div>
                
                <div class="outputTitle">Account Balance:</div>
                <div class="outputRow">$<?php echo number_format($api->balance, 2, '.', ','); ?></div>

                <div class="outputTitle">Unrealized PL:</div>
                <div class="outputRow">$<?php echo number_format($api->unrealizedPl, 2, '.', ','); ?></div>

                <div class="outputTitle">Margin Used:</div>
                <div class="outputRow">$<?php echo number_format($api->marginUsed, 2, '.', ','); ?></div>

                <div class="outputTitle">Margin Available:</div>
                <div class="outputRow">$<?php echo number_format($api->marginAvail, 2, '.', ','); ?></div>

                <div class="outputTitle">Open Trades:</div>
                <div class="outputRow"><?php echo $api->openTrades; ?></div>

                <div class="outputTitle">Open Orders:</div>
                <div class="outputRow"><?php echo $api->openOrders; ?></div>

                <div class="outputTitle">Margin Rate:</div>
                <div class="outputRow"><?php echo $api->marginRate; ?></div>

                <div class="outputTitle">Home Currency:</div>
                <div class="outputRow"><?php echo $api->homecurr; ?></div>

                <div class="clear"></div>
            </div>
            
            <div id="openTrade">
            	<div id="openTradeTitle">Open Trades</div>
            	<?php
	            if(!count($api->openTrade)) {
		            echo "You do not have any open trades.";
	            } else {
		            date_default_timezone_set("America/Toronto");
		            foreach($api->openTrade as $element) {
			            echo "<span class='openTradeListing'>";
			            echo "<label class='tradeId'>Trade ID: ".$element['id']."</label>";
			            echo "<div class='clear'></div>";
			            echo "<label class='instrument'>Pair: ".$element['instrument']."</label>";
			            echo "<label class='units'>Units: ".number_format($element['units'], 0, '.', ',')."</label>";
			            echo "<label class='direction'>Type: ".ucfirst($element['direction'])."</label>";
			            echo "<label class='date'>".date("M d h:mA", $element['time'])."</label>";
			            echo "<div class='clear'></div>";
			            echo "</span>";
		            }
	            }
	            ?>
            </div>
            
            <div class="clear"></div>
        </div>
        
        <div class="clear"></div>
    </body>

</html>