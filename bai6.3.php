<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
    <style>
        *{ font-family: Tahoma; }
        table{ width: 400px; margin: 100px auto; border-collapse: collapse; }
        table th{ background: #66CCFF; padding: 10px; font-size: 18px; }
        td{ padding: 5px; }
    </style>
</head>
<body>
<?php
$mang_so = [];
$mang_duy_nhat = [];
$so_lan = [];
$chuoi = "";

if (isset($_POST['nhap_mang']) && $_POST['nhap_mang'] !== "") {

    $mang_so = explode(",", $_POST['nhap_mang']);

   
    $mang_duy_nhat = array_unique($mang_so);

    
    $so_lan = array_count_values($mang_so);

    foreach($so_lan as $key => $value){
        $chuoi .= trim($key) . ":" . $value . " ";
    }
}


function mang_duy_nhat($mang_so){
    if (!empty($mang_so)){
        return implode(", ", $mang_so);
    }
    return "";
}
?>

<form action="" method="POST">
  <table border="1">
    <thead>
      <tr>
        <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mảng:</td>
        <td>
          <input type="text" name="nhap_mang" 
                 value="<?php echo isset($_POST['nhap_mang']) ? htmlspecialchars($_POST['nhap_mang']) : ''; ?>" />
          <br><small>(Ví dụ: 1,2,3,2,1,4,2)</small>
        </td>
      </tr>
      <tr>
        <td>Số lần xuất hiện:</td>
        <td><input type="text" readonly value="<?php echo $chuoi; ?>"></td>
      </tr>
      <tr>
        <td>Mảng duy nhất:</td>
        <td><input type="text" readonly value="<?php echo mang_duy_nhat($mang_duy_nhat); ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="Thực hiện">
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
