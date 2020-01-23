<?php

require __DIR__ . '/myfiles/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
$AccountSid = "ACed9e4578c642e163eec9478df1fdc02e";

$AuthToken = "d3da04516f850a9e69c20bebe6b5c558";


$client = new Client($AccountSid, $AuthToken);

try {

    $number=$_POST['Number'];

    $msg=$_POST['Message'];
 // Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $number,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => ' +14064126490',
        // the body of the text message you'd like to send
        'body' => $msg
    )
);

} catch (Services_Twilio_RestException $e) {

    echo $e->getMessage();

}

?>
