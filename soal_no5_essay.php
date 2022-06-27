<html>
<head>
</head>
<body>
    <h2> Hitung Luas Lingkaran</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Jari-jari Lingkaran</td>
                <td>:</td>
                <td><input type="text" name="jari" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
HASIL : <br>
<?php
if(isset($_POST['submit'])){
 
Class lingkaran
{
public $radius;
    function setRadius ($radius)
        {
        $this->radius=$_POST['jari'];
        }
    function getRadius()
        {
        $radius=$this->radius;
        return $radius;
        }
   
    function tampil($radius)
        {
        $luas=3.14*$radius*$radius;
        echo "luas lingkaran adalah " .$luas;
        }
}
$Lingkaranku=new lingkaran ();
$Lingkaranku->tampil($_POST['jari']);
}
 
?>


