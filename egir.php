<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/menu.css">

    <title>kayit gir</title>
</head>
<body>

<ul>
  <li><a class="active" href="anasayfa.php">anasayfa</a></li>
  <li><a href="egir.php">kayit gir</a></li>
  <li><a href="listeleme.php">kayit goster</a></li>

</ul>
    <div class="container">
        <form action="" method="post">
        <div class="row">

        


            <div class="row g-3"> 
                <div class="row">
                    <div class="col-4">
                         <select class="form-select" aria-label="Default select example">
                <option selected>ders sec</option>
                <option value="1">matematik</option>
                <option value="2">veri yapilari</option>
       
              </select>
                    </div>
                   
       <div class="col-4">
     
                 <label for="birthday">tarih sec</label>
        <input type="date" name="zaman" id="">
     
      
       </div>
                
                
                </div>
                
        <div class="col">
          <input type="text" class="form-control" placeholder="numarasi" aria-label="First name">
        </div>
     
        
             <button type="submit" class="btn btn-success" >ekle</button>
       
               <button type="submit" class="btn btn-danger">sil</button>
        
     
      </div>
        </div>
</form>

    </div>
    
    
</body>
</html>