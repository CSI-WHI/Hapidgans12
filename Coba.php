
<?php

$username = "HAPID12";
$password = "GANS";

system('clear');
echo "\e[0;31mMasuk dulu yak\n";
echo "\e[0;34musername : ";
$user = trim(fgets(STDIN));
echo "\e[0;34mpassword : ";
$pass = trim(fgets(STDIN));
if($user == $username && $pass == $password)
{
echo "\e[0;32mLogin sukses\n";
sleep(2);
system('clear');
echo "\e[0;33mMisalnya Tools Installer\n";
echo "[1] Phising web
[2] Prank 
[3] Hapid Gans hack
[4] Hapid Gans Trojan
[5] Call
[6] Ddos Tersakit\n";
echo "Masukan pilihan : ";
$menu = trim (fgets(STDIN));
if($menu == 1)
{
system('git clone https://github.com/ClayHackerTeam/WalkerPhis');
}
if ($menu == 2)
{
system('git clone https://github.com/CSI-WHI/Sms');
}
if ($menu == 3)
{
system ('git clone https://github.com/CSI-WHI/hapidgans1');
}
if ($menu == 4)
{
system ('git clone https://github.com/CSI-WHI/Fuck');
}
if ($menu == 5)
{
system ('git clone https://github.com/CSI-WHI/Hay');
}
if ($menu == 6)
{
system ('git clone https://github.com/CSI-WHI/Attack1');
}


}
else
{
echo "Login Gagal\n 
mau tau passwordnya 083872066968 pahamkan\n";
}



?>
