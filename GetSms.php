<?php
function GetSms()
{
	$url = 'https://www.fast2sms.com/dev/bulk';

	$fields 	=	array("sender_id" => 'FSTSMS',"message" => 'Congratulations! You received a Message from DomsIT Solutions',"language" => 'english',"route" => "p","numbers" => "7798661129");

	$conn 	=	curl_init($url);

	curl_setopt($conn, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($conn, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($conn, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($conn, CURLOPT_HTTPHEADER, array( 'authorization: "YourKey"'));

    curl_exec($conn);

    if (curl_errno($conn)) {
        print "Error: " . curl_error($conn);
        exit();
    }

    // echo curl_getinfo($conn);
}
GetSms();
?>
