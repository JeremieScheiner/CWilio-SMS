<?php


//Connectwise Configuration
$connectwise = "https://cw.domain.com"; //Set your Connectwise URL
$companyname = "company"; //Set your company name from Connectwise. This is the company name field from login.
$apipublickey = "Connectwise Public Key"; //Public API key
$apiprivatekey = "Connectwise Private Key"; //Private API key

//Slack Configuration
$smsslacktoken = "Token here"; //Set token from the Slack slash command screen.
$timeoutfix = false; //Enable to fix any 3000ms response from Slack.
$sendtimeoutwait = false; //Set to true to send a please wait message with every command. Only does something when $timeoutfix is set to true.

//Twilio Configuration
$accountsid = "SID here"; //Find this on https://www.twilio.com/user/account/
$authtoken = "Token here"; //Find this on https://www.twilio.com/user/account/
$twilionumber = "Phone here"; //A Twilio phone number you control to send messages from. Enter without symbols or country code. E.x. 5558675309
$countrycode = "+1"; //If not in the US, change this to your country code.

// Other
$helpurl = "https://github.com/jundis/CWilio-SMS"; // Change to your documentation on this command.
$debugmode = true; // Only use if instructed, or you're curious.

//
//Don't modify below unless you know what you're doing!
//

$authorization = base64_encode(strtolower($companyname) . "+" . $apipublickey . ":" . $apiprivatekey); //Encode the API, needed for authorization.

$cwPostHeader = array(
    "Authorization: Basic " . $authorization,
    "Content-Type: application/json"
);

$cwHeader = array("Authorization: Basic ". $authorization);

$slackHeader = array("Content-Type: application/json");

$twilHeader = array("application/x-www-form-urlencoded","Authentication: Basic " . base64_encode($accountsid . ":" . $authtoken));