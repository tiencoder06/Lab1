<!DOCTYPE html>
<html>
<head>
 <title>Bài 6.2</title>
 <meta charset="utf-8">
 <style>
 *{ font-family: Tahoma; }
 table{ width: 400px; margin: 100px auto; border-collapse: collapse; }
 table th{ background: #66CCFF; padding: 10px; font-size: 18px; }
 td { padding: 5px; }
 </style>
</head>
<body>
<?php
$mang_so = [];


function phat_sinh_mang($n) {
    $m = [];
    for ($i = 0; $i < $n; $i++) {
        $m[$i] = mt_rand(0, 20); 
    }
    return $m;
}

function xuat_mang($mang_so){
    if (!empty($mang_so)) {
        return implode(" ", $mang_so);
    }
    return "";
}

function tim_min($mang_so){
    if (!empty($mang_so)) {
        $min = $mang_so[0];
        $n = count($mang_so);
        for($i = 1; $i < $n; $i++){ 
            if($mang_so[$i] < $min) $min = $mang_so[$i];
        }
        return $min;
    }
    return "";
}

function tim_max($mang_so){
    if (!empty($mang_so)) {
        $max = $mang_so[0];
        $n = count($mang_so);
        for($i = 1; $i < $n; $i++){ 
            if($mang_so[$i] > $max) $max = $mang_so[$i];
        }
        return $max;
    }
    return "";
}

function tinh_tong($mang_so){
    $tong = 0;
    $n = count($mang_so);
    for($i = 0; $i < $n; $i++){ 
        $tong += $mang_so[$i];
    }
    return $tong;
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["so_phan_tu"])) {
    $n = intval($_POST["so_phan_tu"]);
    if ($n > 0) {
        $mang_so = phat_sinh_mang($n);
    }
}
?>

<form action="" method="POST">
 <table border="1">
   <thead>
     <tr><th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th></tr>
   </thead>
   <tbody>
     <tr>
       <td>Nhập số phần tử:</td>
       <td><input type="text" name="so_phan_tu" value="<?php echo isset($_POST['so_phan_tu']) ? $_POST['so_phan_tu'] : ''; ?>"></td>
     </tr>
     <tr>
       <td></td>
       <td><input type="submit" value="Phát sinh và tính toán"></td>
     </tr>
     <tr>
       <td>Mảng:</td>
       <td><input type="text" readonly value="<?php echo xuat_mang($mang_so); ?>"></td>
     </tr>
     <tr>
       <td>GTLN (MAX):</td>
       <td><input type="text" readonly value="<?php echo tim_max($mang_so); ?>"></td>
     </tr>
     <tr>
       <td>GTNN (MIN):</td>
       <td><input type="text" readonly value="<?php echo tim_min($mang_so); ?>"></td>
     </tr>
     <tr>
       <td>Tổng mảng:</td>
       <td><input type="text" readonly value="<?php echo tinh_tong($mang_so); ?>"></td>
     </tr>
   </tbody>
 </table>
</form>
</body>
</html>
