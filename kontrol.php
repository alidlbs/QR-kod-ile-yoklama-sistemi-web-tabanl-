<?php require('baglanti/baglan.php'); ?>
<?php include('fonksiyon/yonledir.php'); ?>

<?php
$ka=$_POST["email"];
$sf=$_POST["sifre"];
$y=0;
if($baglanti->connect_error)
echo "baglamadınız  çünkü : ". $baglanti->connect_error;
else
{  $a=1;
    $sorgu="SELECT * FROM kullanicilar WHERE(eposta = '".$ka."'AND sifre='".$sf."' and ak='".$a."')";
    $git=mysqli_query($baglanti,$sorgu);
   $deneme=mysqli_num_rows($git);
   if(mysqli_num_rows($git)>0)
   {

       $str=mysqli_fetch_array($git);

       go("anasayfa.php?&eposta=$str[0]",1);
   }
   else{
      echo" .$ka.<div class='container'>
      <h1><span>kullanici adi <br>sifre<br>hatali</span></h1>
      
      <div class='blobs_1'></div>
      <div class='blobs_2'></div>
      <div class='blobs_3'></div>
      <div class='blobs_4'></div>
      <div class='blobs_5'></div>
      <div class='blobs_6'></div>
      <div class='blobs_7'></div>
  </div>";

   }
  
}
 $baglanti->close();
    ?>