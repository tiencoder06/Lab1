<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 4 - Tính toán dãy số</title>
</head>
<body>
<?php  
$tong = $tich = $tong_chan = $tong_le = "";
$so_dau = $so_cuoi = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $so_dau = intval($_POST["so_dau"]); 
    $so_cuoi = intval($_POST["so_cuoi"]); 

    // Nếu nhập ngược thì hoán đổi
    if ($so_dau > $so_cuoi) {
        $tmp = $so_dau;
        $so_dau = $so_cuoi;
        $so_cuoi = $tmp;
    }

    $tong = 0; 
    $tich = 1; 
    $tong_chan = 0; 
    $tong_le = 0; 

    for ($i = $so_dau; $i <= $so_cuoi; $i++) {
        $tong += $i;
        $tich *= $i;
        if ($i % 2 == 0) {
            $tong_chan += $i;
        } else {
            $tong_le += $i;
        }
    }
} 
?> 

<form action="" method="post"> 
  <table width="728" border="1" cellspacing="0" cellpadding="5"> 
    <tr> 
      <td width="122">&nbsp;</td> 
      <td width="76">Số bắt đầu</td> 
      <td width="169">
        <input type="text" name="so_dau" value="<?php echo $so_dau; ?>" />
      </td> 
      <td width="152">Số kết thúc</td> 
      <td width="175">
        <input type="text" name="so_cuoi" value="<?php echo $so_cuoi; ?>" />
      </td> 
    </tr> 
    <tr> 
      <td colspan="5"><strong>Kết quả</strong></td> 
    </tr> 
    <tr> 
      <td>Tổng các số</td> 
      <td colspan="4">
        <input type="text" readonly value="<?php echo $tong; ?>" />
      </td> 
    </tr> 
    <tr> 
      <td>Tích các số</td> 
      <td colspan="4">
        <input type="text" readonly value="<?php echo $tich; ?>" />
      </td> 
    </tr> 
    <tr> 
      <td>Tổng các số chẵn</td> 
      <td colspan="4">
        <input type="text" readonly value="<?php echo $tong_chan; ?>" />
      </td> 
    </tr> 
    <tr> 
      <td>Tổng các số lẻ</td> 
      <td colspan="4">
        <input type="text" readonly value="<?php echo $tong_le; ?>" />
      </td> 
    </tr> 
    <tr> 
      <td colspan="5" align="center">
        <input type="submit" value="Tính toán" />
      </td> 
    </tr> 
  </table> 
</form>
</body>
</html>
