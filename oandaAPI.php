<?php

// oandaAPI is an that has methods to talk to the OANDA API
class oandaAPI {


	// Retrieves basic account information based on accountNumber
    function retrieveAccount($accountNumber) {
    	$ch = curl_init("https://api-sandbox.oanda.com/v1/accounts/".$accountNumber);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $result = json_decode($result, true);

        // Store the values returned from cURL execution
        $this->accountId = $result['accountId']; 
        $this->accountName = $result['accountName'];
        $this->balance = $result['balance'];
        $this->unrealizedPl = $result['unrealizedPl'];
        $this->marginUsed = $result['marginUsed'];
        $this->marginAvail = $result['marginAvail'];
        $this->openTrades = $result['openTrades'];
        $this->openOrders = $result['openOrders'];
        $this->marginRate = $result['marginRate'];
        $this->homecurr = $result['accountCurrency'];
    }
    
    // Retrieve information for Open Trades
    function retrieveTrades($accountNumber) { 
    	$ch = curl_init("https://api-sandbox.oanda.com/v1/accounts/".$accountNumber."/trades");
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $result = json_decode($result, true);
        
        // Store the values returned from cURL execution
        $this->openTrade = $result['trades'];
    }
    
	/* Not implemented
    function retrieveUserProfile($username) {
	    $ch = curl_init("https://api-sandbox.oanda.com/v1/accounts?username=".$username);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    $result = curl_exec($ch);
	    $result = json_decode($result, true);

	    $this->userProfile = $result;
    }
	*/
}

?>