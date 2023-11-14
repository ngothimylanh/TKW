<!DOCTYPE html>
<html>
<head>
    <title>mang_2</title>
    <meta charset="utf-8">
        <style>
        *{
            font-family: Tahoma;
        }
        table{
            width: 400px;
            margin: 100px auto;
        }
        table th{
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }
        </style>
</head>
<body>
    <?php
        function xuat_mang($mang_so){
            echo implode(" ", $mang_so);
        }
        function tim_min($mang_so){
            if (isset($mang_so[0])) {
                $min = $mang_so[0];
                $n = count($mang_so);
            for ($i = 1; $i < $n; $i++){
                if ($mang_so[$i] < $min){
                    $min = $mang_so[$i];
            }}
        echo $min;
        }}
        function tim_max($mang_so){
            if (isset($mang_so[0])){
                $max = $mang_so[0];
                $n = count($mang_so);
            for ($i = 1; $i < $n; $i++){
                if ($mang_so[$i] > $max){
                    $max = $mang_so[$i];
            }}
        echo $max;
        }}
        function tinh_tong($mang_so){
            $tong_so = 0;
            $n = count($mang_so);
        for ($i = 0; $i < $n; $i++){
            $tong_so += $mang_so[$i];
        }
        echo $tong_so;
        }
        $so_phan_tu = isset($_POST['so_phan_tu'])?$_POST['so_phan_tu']:0;
        $mang_so = [];
        if (isset($_POST['so_phan_tu']) && is_numeric($so_phan_tu) && $so_phan_tu > 0){
            for ($i = 0; $i < $so_phan_tu; $i++) {
                $mang_so[] = mt_rand(0, 20);
            }
        }
    ?>
    <form action="mang_2.php" method="POST">
        <table>
            <thead><tr><th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th></tr>
        </thead>
        <tbody>
            <tr>
                <td>Nhập số phần tử:</td>
                <td><input type="text" name="so_phan_tu" width="100%" value="<?php echo $so_phan_tu;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Phát sinh và tính toán"></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="mang_so" disabled="disabled" value="<?php xuat_mang($mang_so); ?>"></td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td><input type="text" name="gtln" disabled="disabled" value="<?php echo isset($mang_so[0]) ? tim_max($mang_so) : ''; ?>"></td>
            </tr>
            <tr>
                <td>GTNN (MIN) trong mảng:</td>
                <td><input type="text" name="ttnn" disabled="disabled" value="<?php echo isset($mang_so[0]) ? tim_min($mang_so) : ''; ?>"></td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td><input type="text" name="tong" disabled="disabled" value="<?php echo tinh_tong($mang_so); ?>"></td>
            </tr>
        </tbody>
        </table>
    </form>
</body>
</html>