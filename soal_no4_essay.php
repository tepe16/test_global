<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<body>

<h2>SOAL ESSAY NO 4</h2>

<form form action="" method="POST">
  <label for="fname">Masukan Teks</label><br>
  <textarea type="text" id="karakter" name="karakter"></textarea><br>
  <input type="submit" name='kirim' value="Submit">
</form> 


</body>
</html>

HASIL : <br>
<?php
if(isset($_POST['kirim'])){
  $karakter = strlen($_POST['karakter']);

  if ($karakter <= 4000){
     echo '
     
     <script>
        alert("jumlah karakter terpenuhi output 1");
        window.location="soal_no4_essay.php";
       
     </script>
     
     ';
  } else {
    echo '
     
    <script>
       alert("jumlah karakter tidak terpenuhi output 0");
       window.location="soal_no4_essay.php";
      
    </script>
    
    ';
  }

}
?>


