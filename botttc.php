<?php

//colors

$red="\033[1;31m";

$green="\033[1;32m";

$yellow="\033[1;33m";

$blud="\033[1;34m";

$res="\033[1;35m";

$nau="\033[1;36m";

$trang="\033[1;37m";

$dfile = file_get_contents('data.ini');

$cookie = explode('|',explode('ttc=',$dfile)[1])[0];

$fbcookie = explode('|',explode('fb=',$dfile)[1])[0];

echo -e "\e[1;3"$i"m  \e[1m"
echo "。、★、•、、、";
echo "、、 ☆ ❤ 、＼＊•";
echo "•❤☆＼•＼☆＼、＊";
echo "＼、＊• ❤＼☆＼、";
echo "╭⌒╮⌒⌒╮•╱◥██◣❤ ★";
echo "｜田  ｜田田|•♧";
echo "╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬";
echo "   ";
echo "   ";
echo "   ";
echo "copyright © by AT 0933954440";
echo "loading................";

echo $red, '

Login TTC...'.PHP_EOL;

    $ch1 = @curl_init();    curl_setopt($ch1, CURLOPT_URL, 'https://tuongtaccheo.com/cauhinh');

    $head[] = "Host:tuongtaccheo.com";

    $head[] = "accept:application/json, text/javascript, */*; q=0.01";

    $head[] = "user-agent:Mozilla/5.0 (Linux; Android 9; CPH2077) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36";

    $head[] = "x-requested-with:XMLHttpRequest";

    $head[] = "save-data:on";

    $head[] = "sec-fetch-site:same-origin";

    $head[] = "sec-fetch-dest:empty";

    $head[] = "referer:https://tuongtaccheo.com/kiemtien/subcheo/";

    $head[] = "accept-language:vi,en-US;q=0.9,en;q=0.8";

    curl_setopt($ch1, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 9; CPH2077) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36');

    curl_setopt($ch1, CURLOPT_ENCODING, '');

    curl_setopt($ch1, CURLOPT_COOKIE, $cookie);

    curl_setopt($ch1, CURLOPT_HTTPHEADER, $head);

    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);

    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, FALSE);

    curl_setopt($ch1, CURLOPT_TIMEOUT, 60);

    curl_setopt($ch1, CURLOPT_CONNECTTIMEOUT, 60);

    curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, TRUE);

   

    $page1 = curl_exec($ch1);

    curl_close($ch1);

   

$tit1 = explode('</title>',explode('<title>',$page1)[1])[0];

for ($i=1; $i < rand(1,5); $i++){

    echo $green,'[»] - '.$trang, $i.'s'.PHP_EOL;

sleep(1);

}

if($tit1 == "Setting..."){

    echo $green,'[»] - '.$green, 'Login sucess !'.PHP_EOL;

}else{

    echo $green,'[»] - '.$red, 'Login fail !'.PHP_EOL;

    echo $green,'[»] - '.$red, 'Retry, please !'. $trang, ' COOKIE'. $red, ' account TTC'.PHP_EOL;

    sleep(5);

    @system('clear');

    die();

}

    $ch = @curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/subcheo/getpost.php');

    $head[] = "Host:tuongtaccheo.com";

    $head[] = "accept:application/json, text/javascript, */*; q=0.01";

    $head[] = "user-agent:Mozilla/5.0 (Linux; Android 9; CPH2077) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36";

    $head[] = "x-requested-with:XMLHttpRequest";

    $head[] = "save-data:on";

    $head[] = "sec-fetch-site:same-origin";

    $head[] = "sec-fetch-dest:empty";

    $head[] = "referer:https://tuongtaccheo.com/kiemtien/subcheo/";

    $head[] = "accept-language:vi,en-US;q=0.9,en;q=0.8";

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 9; CPH2077) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36');

    curl_setopt($ch, CURLOPT_ENCODING, '');

    curl_setopt($ch, CURLOPT_COOKIE, $cookie);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    curl_setopt($ch, CURLOPT_TIMEOUT, 60);

    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

   

    $page = curl_exec($ch);

    curl_close($ch);

   

    if (clistnv() == 1){

        $jsonfile = file_get_contents('nhiemvu.txt');

    $djsonfile = json_decode($jsonfile,true);

    for ($i=0; $i < 10; $i++){

    $uid = $djsonfile[$i]['idpost'];

    //echo $yellow, 'STT '.($i+1).' - ';

    echo follow($uid,$fbcookie,$green,$red);

       echo ' | ';

       echo nhan($uid,$cookie).PHP_EOL;

       sleep(6);

       }

       $openf1 = fopen('nhiemvu.txt','w+');

      fwrite($openf1,"");

 

       for ($i=1; $i < 61; $i++){

           echo $green,'[» Nghi ngoi] - '.$red, $i.' GIAY'.PHP_EOL;

sleep(1);

       }

       @system('clear');

       @system('php tt.php');

        die();

    }

   

    $json = json_decode($page,true);

    $uid = $json[0]['idpost'];

    if($uid != ""){

        echo $green,'[»] - '.$trang, ' Dang lay nhiem vu ... '.PHP_EOL;

        for ($i=1; $i < rand(1,5); $i++){

    echo $green,'[»] - '.$trang, $i.'s'.PHP_EOL;

sleep(1);

}

    $openf = fopen('nhiemvu.txt','w+');

    $nv = fwrite($openf,$page."\n");

    if($nv){

        echo $green,'[»] - '.$trang,'Get job, right !'.PHP_EOL;

       @system('clear');

       @system('php tt.php');

    } else {

        echo $green,'[»] - '.$red,'Get job,fail !'.PHP_EOL;

       @system('clear');

     

         }

    }else{

        echo $green,'[»] - '.$red,'Get job,fail !

( Slowly, please )'.PHP_EOL;



      for ($i=1; $i < 31; $i++){

    echo $green,'[»] - '.$red, $i.' GIAY'.PHP_EOL;

sleep(1);

}

       @system('clear');

       @system('php tt.php');

         }

   

function clistnv(){

    $jsonfile = file_get_contents('nhiemvu.txt');

    $djsonfile = json_decode($jsonfile,true);

    if($djsonfile[0]['idpost'] != ""){

        return  '1';

    }

    }

function nhiemvu(){

    $jsonfile = file_get_contents('nhiemvu.txt');

    $djsonfile = json_decode($jsonfile,true);

    return $djsonfile[0]['idpost'];

    }

function follow($uid,$cookie,$green,$red){

    $data = 'fb_dtsg=AQEfts5Afnhf%3AAQFMbdJZqpvA&jazoest=22205&_wap_notice_shown=&subject_id='.$uid.'&forceredirect=false&location=364&m_sess=&jazoest=21826&__dyn=1KQdAGm1gxu4U4ifGh0BBBgS5UdEO3m2i5UfXwNwTwKxu7Ec8uKewhEfolxK4ohx21vwdK4olwYw9a260JE4-1gCwSxu0BU3JxO1ZxObwOwWwt8-0lm68WUS2G2Dwp84a1Pwk888C0NEeo5W3S0H8-7E2swp82vwAwmE2ewnE2Ww&__csr=&__req=3&__user=100015578112958&_orig_post_vars=subject_id%2Cforceredirect%2Clocation%2Cm_sess%2Cjazoest%2C__dyn%2C__csr%2C__req%2C__a%2C__user';

    $web = post('https://m.facebook.com/a/subscriptions/add',$data,$cookie);

   if($web == 1){

        echo $green, '[»] - Success: '.$uid.''.PHP_EOL;

        }else{

            echo $green, '[»] - '.$red,'Loi roi xem lai COOKIE FB '.$uid.' !'.PHP_EOL;

       }

}

function nhan($uid,$cookie){

    $data = array(

           "id"=>$uid

);

$web = post_nhan('https://tuongtaccheo.com/kiemtien/subcheo/nhantien.php',http_build_query($data),$cookie);

$data = json_decode($web,true);

if($data['mess'] != ""){

     echo '+600';

     }else{

         echo 'Chua theo doi nick nay';

     }

}

function post($site,$data,$cookie){

    $datapost = curl_init();

    //$head[] = "Expec";

    curl_setopt($datapost, CURLOPT_URL, $site);

    curl_setopt($datapost, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);

    curl_setopt($datapost, CURLOPT_HEADER, 0);

    //curl_setopt($datapost, CURLOPT_HTTPHEADER, $head);

    curl_setopt($datapost, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 9; CPH2077) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36');

    curl_setopt($datapost, CURLOPT_POST, TRUE);

    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);

    curl_setopt($datapost, CURLOPT_COOKIE,$cookie);

   

    $page = curl_exec ($datapost);

    $error = explode(',',explode('"error":',$page)[1])[0];

    if($error == ''){

         return 1;

    }else{

        return 0;

    }

  //  curl_close ($datapost);

   

}

function post_nhan($site,$data,$cookie){

    $datapost = curl_init();

    $head[] = "Host:tuongtaccheo.com";

    $head[] = "accept:*/*";

    $head[] = "user-agent:Mozilla/5.0 (Linux; Android 9; CPH2077) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36";

    $head[] = "x-requested-with:XMLHttpRequest";

    $head[] = "save-data:on";

    $head[] = "sec-fetch-site:same-origin";

    $head[] = "sec-fetch-dest:empty";

    $head[] = "referer:https://tuongtaccheo.com/kiemtien/subcheo/";

    $head[] = "origin:https://tuongtaccheo.com";

    $head[] = "accept-language:vi,en-US;q=0.9,en;q=0.8";

    $head[] = "sec-fetch-mode:cors";

    $head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";

    curl_setopt($datapost, CURLOPT_URL, $site);

    curl_setopt($datapost, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);

    curl_setopt($datapost, CURLOPT_HEADER, 0);

    curl_setopt($datapost, CURLOPT_HTTPHEADER, $head);

    curl_setopt($datapost, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 9; CPH2077) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36');

    curl_setopt($datapost, CURLOPT_POST, TRUE);

    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);

    curl_setopt($datapost, CURLOPT_COOKIE,$cookie);

   

    return curl_exec ($datapost);

   

    curl_close ($datapost);

   

}

?>
