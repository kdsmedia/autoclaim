><?php
error_reporting(0);
//color
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";


//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

$Color_Off="\033[0m";      
$Black="\033[0;30m";      
$Red= "\033[0;31m";         
$Green="\033[0;32m";      
$Yellow="\033[0;33m";       
$Blue="\033[0;34m";         
$Purple="\033[0;35m";      
$Cyan="\033[0;36m";       
$White="\033[0;37m";       
$IYellow="\033[0;93m";      
$IRed="\033[0;91m";         
$BIRed="\033[1;91m";   
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";     
$BIBlue="\033[1;94m";      
$BICyan="\033[1;96m";       
$BIBlack="\033[1;90m";     
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";  
$On_White="\033[47m";     
$BIBlue="\033[1;94m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";   
$On_Blue="\033[44m";
$On_Green="\033[42m";  
$IGreen="\033[0;92m";   
$IYellow="\033[0;93m";
$Icyan="\033[0;96m";
//red to yellow shade ↓

$r3="\033[01;38;5;196m";
$r2="\033[01;38;5;202m";
$r1="\033[01;38;5;208m";
$ry="\033[01;38;5;214m";
$y1="\033[01;38;5;220m";
$y2="\033[01;38;5;226m";
$y3="\033[01;38;5;228m";
/* END COLOR */

//Tambahkan Bagian include cfg nya 


function curl($url, $ua, $data = null){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 1,
            CURLOPT_HTTPHEADER => $ua
        ));
        if($data){
            curl_setopt_array($curl, array(
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_POST => 1
            ));
       }
        $result = curl_exec($curl);
        curl_close($curl);
	return $result;
}


function head($user, $cookie){
$ua = [
    'uptocoin.my.id',
 //berada di menu Request
    'User-Agent: '.$user,
    'Cookie: '.$cookie,
];
return $ua;
}

//BAGIAN DASHBOARD
$url = "https://uptocoin.my.id/dashboard";
 //Isi Link Dashboard
$dash = curl($url, head($user, $cookie));
//Jngan di Ubah

$account = //explode bagian Tulisan Balance nya jika ada
$balance = //explode Jumlah Total Balance nya jika ada
echo $green2."💸 Your ".$account." Now".$putih2."    : ".$green2.$balance."\n";

$energy = //Explode Bagian Tulisan energy nya jika ada
$jumlah = //explode Bagian Jumlah Total energy nya jika ada
echo $yellow2."⚡ Your ".$energy." Now".$putih2."     : ".$yellow2.$jumlah."\n\n\n";



//FUNCTION JIKA ENERGI NYA KOSONG KAYAK DENGKUL LU
if($total == "0"){
echo$merah2."⚡ Energymu Habis 😣 Silahkan Main Shortlink Lagi Gih 😘\n";
echo$White."⚡ Your Energy Is Running Out 😣 Please Play The Short Link Again 😘\n\n";
sleep(1);
exit;
}else{
}

//FUNGSI WHILE TRUE (PERULANGAN) MENGULANGI
while(true){
$url = "https://uptocoin.my.id/auto";
 //Isi Link Auto 
$auto = curl($url, head($user, $cookie));
//Jangan Di Ubah
$token = explode('"',explode('<input type="hidden" name="token" value="',$auto)[1])[0];
// Jangan Di Ubah

$time = //explode Bagian Timer nya atau waktu Auto nya


//Function Timer 
for ($x=$time;$x>0;$x--){
echo "\r                       \r";
echo $BIWhite."Sabar Bosquee ".$green2.$x.$BIWhite." Ritual Dulu ☕ 🚬";
sleep(1);
}
echo "\r                       \r";

//URL AUTO VERIFY
$url = "https://uptocoin.my.id/auto";
$data = "token=$token";
$verify = curl($url, head($user, $cookie), $data);
$claim = explode("'",explode("text: '",$verify)[1])[0];
//gak usah di ubah mayoritas web auto faucet begini 

echo $lblue2."[".$green2."✅".$lblue2."] ".$green2.$claim."\n";


//BACK TO DASHBOARD 
$url = "https://uptocoin.my.id/dashboard";
 //URL DASHBOARD 
$ub = curl($url, head($user, $cookie));
//PERBEDAAN NYA CUMAN $ub ($ub bisa kalian ubah , karena ini update an balance  dashboard yang baru )

$account = //explode nama balance seperti diatas
$balance = //explode jumlah balance seperti diatas

echo $lblue2."[".$yellow2."💸".$lblue2."] ".$green2."Total Your ".$account.$putih2."      : ".$yellow2.$balance."\n";

	$energy = //explode nama energy seperti diatas
	$jumlah = //explode jumlah energy seperti diatas

	echo $lblue2."[".$red2."⚡".$lblue2."] ".$yellow2."Your ".$energy.$yellow2." Remains".$putih2."     : ".$red2.$jumlah."\n";
}
