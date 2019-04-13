<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>

</head>

<div class="stars">
    <form action="">
        <input class="star star-5" id="star-5" type="radio" name="star"/>
        <input class="star star-4" id="star-4" type="radio" name="star"/>
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" name="star"/>
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" name="star"/>
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" name="star"/>
        <label class="star star-1" for="star-1"></label>
    </form>
</div>

<?php
$link = new mysqli('localhost','root','','test2') or die("Can not connect database");
$query = "SELECT * FROM thongtinxe";
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        echo "<div class='pro'>";
        echo "<nhaxe>Tý Tùng</nhaxe> ";
        echo "<label class='star star-5' id='star-5'></label>";
        echo "<label class='star star-4' id='star-4'></label>";
        echo "<label class='star star-3' id='star-3'></label>";
        echo "<label class='star star-2' id='star-2'></label>";
        echo "<label class='star star-1' id='star-1'></label>";
        echo "<h3>$row[Noidi] ----> $row[Noiden] </h3>";
        echo "MÔ TẢ: $row[Mota] "; echo '                    ';                  echo" Gia: $row[Gia] VND <br />";
        echo "<p align='right'><a href='addcart.php?item=$row[Loaixe]'>Chọn chỗ</a></p>";
        echo "</div>";
    }
}
?>


</body>
</html>