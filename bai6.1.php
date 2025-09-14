<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nhập và tính toán trên dãy số</title>
    <style>
        * { font-family: Tahoma; }
        table { width: 400px; margin: 100px auto; border-collapse: collapse; }
        table th { background: #66CCFF; padding: 10px; font-size: 18px; }
        td { padding: 5px; }
    </style>
</head>
<body>
<?php 
$ket_qua = "";
$mang_so = [];

if (isset($_POST['btn_goi'])) { 
    $nhap = trim($_POST['nhap_mang']);
    if ($nhap !== "") {
        $mang_so = explode(",", $nhap);
        $n = count($mang_so); 
        $ket_qua = 0;
        for ($i = 0; $i < $n; $i++) { 
            $so = trim($mang_so[$i]); 
            if (is_numeric($so)) {
                $ket_qua += $so;
            }
        }
    }
}
?> 

<form method="POST" action="">
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nhập dãy số:</td>
                <td>
                    <input type="text" name="nhap_mang" 
                           value="<?php echo isset($_POST['nhap_mang']) ? htmlspecialchars($_POST['nhap_mang']) : ''; ?>">
                    <br><small>(Nhập cách nhau bằng dấu phẩy, ví dụ: 1,2,3,4)</small>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_goi" value="Tổng dãy số"></td>
            </tr>
            <tr>
                <td>Tổng dãy số:</td>
                <td><input type="text" readonly value="<?php echo $ket_qua; ?>"></td>
            </tr>
        </tbody>
    </table>
</form>
</body>
</html>
