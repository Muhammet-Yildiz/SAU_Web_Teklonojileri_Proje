<?php

$kullanici_adi="b211210352@sakarya.edu.tr";
$sifre="b211210352";

if($kullanici_adi==$_POST['username'] && $sifre==$_POST['password'])
{
    echo "Hoşgeldiniz b211210352 <br/>";
    echo " 5 saniye içinde hakkimda sayfasına yönelendirileceksiniz";
    header("Refresh: 7; url=hakkimda.html");

}
else{
    echo "Girilen bilgiler hatalıdır. 3 saniye içinde giriş ekranına yönelendirileceksiniz";
    header("Refresh: 3; url=login.html");
}

?>