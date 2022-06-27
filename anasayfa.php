<?php require('baglanti/baglan.php'); ?>
<?php include('fonksiyon/yonledir.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<script src="js/main.js"></script>
<script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/menu.css">
</head>

<body>

<ul>
  <li><a class="active" href="anasayfa.php">anasayfa</a></li>
  <li><a href="egir.php">kayit gir</a></li>
  <li><a href="listeleme.php">kayit goster</a></li>

</ul>


<div class="container">
  <form action="olusturma.php" method="post">
  <div class="row">

  <?php 



if($baglanti->connect_error)
echo "baglamadınız  çünkü : ". $baglanti->connect_error;
else
{  
   $akdemisyen = $_GET['eposta']; #eposta aldi
$sicilbul="SELECT sicil_no FROM akademisyen WHERE eposta = '$akdemisyen'";# eposta ile sicil buldu
$sicil = mysqli_query($baglanti,$sicilbul) or die("Sorgu çalıştırılmadı..".$mysql->error);

$sonuc= mysqli_fetch_column($sicil);

if ($sicil) {
  
$sorgu="SELECT ders.ad  FROM  ders INNER JOIN akademisyendersleri  ON   akademisyendersleri.ders_kodu = ders.ders_kodu  WHERE akademisyendersleri.akademisyen_sicil_no = '$sonuc'";
    $dersler=mysqli_query($baglanti,$sorgu);

}
    


  
}
 $baglanti->close();
  
  
  
  ?>
   <div class="row g-3"> 
          <div class="row">
              <div class="col-4">
            
                   <select class="form-select" aria-label="Default select example" name="dersler">
          <option selected>ders sec</option>
<?php while ($row1 = mysqli_fetch_array($dersler)):; 
 ?>
           <?php echo"<option value='$row1[0]'> 
                $row1[0]
             
           
               
              </option>  ";?>
          <?php endwhile; ?>
     
        </select>
              </div>
             
 <div class="col-4">
<button type="submit" class="btn btn-primary">olustur</button>  


 </div>
          
          
          </div>
          
      
  
       
 
       
  

</div>
  </div>
</form>

</div>


   
</body>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</html> 
