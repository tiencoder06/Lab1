<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8" />
<title>Bài 5</title>
</head>
<body>
<?php 

function giai_pt_bac_1($a, $b) {
    if ($a == 0) {
        if ($b == 0) 
            return "Phương trình có vô số nghiệm";
        else 
            return "Phương trình vô nghiệm";
    } else {
        $x = -$b / $a;
        return "x = " . round($x, 2);
    }
}


function giai_pt_bac_2($a, $b, $c) {
    if ($a == 0) {
        
        return giai_pt_bac_1($b, $c);
    } else {
        $delta = pow($b, 2) - 4 * $a * $c;
        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có nghiệm kép: x1 = x2 = " . round($x, 2);
        } else {
            $can = sqrt($delta);
            $x1 = (-$b + $can) / (2 * $a);
            $x2 = (-$b - $can) / (2 * $a);
            return "Phương trình có 2 nghiệm phân biệt: x1 = " . round($x1, 2) . ", x2 = " . round($x2, 2);
        }
    }
}

$nghiem = "";
$a = $b = $c = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $nghiem = giai_pt_bac_2($a, $b, $c);
}
?> 

<form action="" method="post">
<table width="806" border="1" cellspacing="0" cellpadding="5">
<tr>
    <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
</tr>
<tr>
    <td width="83">Phương trình</td>
    <td width="236"><input name="a" type="text" value="<?php echo $a; ?>" /> X² +</td>
    <td width="218"><input type="text" name="b" value="<?php echo $b; ?>" /> X +</td>
    <td width="241"><input type="text" name="c" value="<?php echo $c; ?>" /> = 0</td>
</tr>
<tr>
    <td colspan="4">
        Nghiệm:  
        <input type="text" readonly value="<?php echo $nghiem; ?>" size="80" />
    </td>
</tr>
<tr>
    <td colspan="4" align="center">
        <input type="submit" value="Giải" />
    </td>
</tr>
</table>
</form>
</body>
</html>
