<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Giải phương trình bậc 1</title>
</head>
<body>
<?php  
$nghiem = "";
$a = "";
$b = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $a = $_POST["a"]; 
    $b = $_POST["b"]; 

    if ($a == 0) { 
        if ($b == 0) {
            $nghiem = "Phương trình có vô số nghiệm"; 
        } else {
            $nghiem = "Phương trình vô nghiệm"; 
        }
    } else { 
        $x = -($b / $a); 
        $x = round($x, 2); 
        $nghiem = "x = $x"; 
    } 
} 
?> 

<form action="" method="post"> 
  <table width="744" border="1"> 
    <tr> 
      <td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1</strong></td> 
    </tr> 
    <tr> 
      <td width="120">Phương trình</td> 
      <td width="250"> 
        <input name="a" type="text" value="<?php echo $a; ?>" /> X + 
      </td> 
      <td width="352"> 
        <input name="b" type="text" value="<?php echo $b; ?>" /> = 0
      </td> 
    </tr> 
    <tr> 
      <td colspan="3">
        Nghiệm:  
        <input name="kq" type="text" readonly 
               value="<?php echo $nghiem; ?>" />
      </td>
    </tr> 
    <tr> 
      <td colspan="3" align="center">
        <input type="submit" value="Giải" />
      </td> 
    </tr> 
  </table> 
</form>
</body>
</html>
