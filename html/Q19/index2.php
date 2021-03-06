<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>匿名関数</title>
    <style type="text/css">
    </style>
</head>

<body>
    <?php
    //計算処理関数を呼び出し
    calcProc(10,20,'getTotal','printMessage');
    //計算処理関数（高階関数）
    function calcProc(int $a,int $b,callable $func,callable $func2){
        //足し算関数を呼び出し
        $total = $func($a,$b);
        //メッセージ表示関数を呼び出し
        $func2($total);
    }
    //足し算関数
    function getTotal(int $a,int $b): int{
        return $a + $b;
    }
    //メッセージ表示関数
    function printMessage(int $total){
        print "合計は{$total}です";
    }
    ?>
</body>

</html>