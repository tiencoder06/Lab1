<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 3 - Đọc số</title>
</head>
<body>
<?php 
$so = "";
$chu = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $so = trim($_POST["so"]);
    if (is_numeric($so)) {
        switch (intval($so)) {
            case 0: $chu="Không"; break; 
            case 1: $chu="Một"; break; 
            case 2: $chu="Hai"; break; 
            case 3: $chu="Ba"; break; 
            case 4: $chu="Bốn"; break; 
            case 5: $chu="Năm"; break; 
            case 6: $chu="Sáu"; break; 
            case 7: $chu="Bảy"; break; 
            case 8: $chu="Tám"; break; 
            case 9: $chu="Chín"; break; 
            default: $chu="Không hợp lệ"; break; 
        }
    } else {
        $chu = "Không hợp lệ";
    }
}
?> 

<form action="" method="POST"> 
  <table width="519" border="1" cellspacing="0" cellpadding="5"> 
    <tr> 
      <td colspan="3" bgcolor="#336699" align="center"><strong>Đọc số</strong></td> 
    </tr> 
    <tr> 
      <td>Nhập số (0-9)</td> 
      <td width="69" rowspan="2" align="center">
        <input type="submit" value="Submit" />
      </td> 
      <td>Bằng chữ</td> 
    </tr> 
    <tr> 
      <td width="177">
        <input type="text" name="so" value="<?php echo htmlspecialchars($so); ?>" />
      </td> 
      <td width="232">
        <input type="text" readonly value="<?php echo $chu; ?>" />
      </td> 
    </tr> 
  </table> 
</form>
</body>
</html>
