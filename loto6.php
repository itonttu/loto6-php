<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continue</title>
</head>
<body>
    <?php
    echo"以下の６個の数字を選び出しました。当たるかな？<br><br>";

    $numArr=array();
    
    for ($cnt=0;$cnt<6;$cnt++){
        $num=mt_rand(1,43);

        for ( ; ; ) { 
            if (in_array($num,$numArr)) {
                $num=mt_rand(1,43);# code...
            }# code...
            else{
                break;
            }
        }
        $numArr[]=$num;
    }



    sort($numArr);

foreach ($numArr as $num) {
    echo$num,'<br>',PHP_EOL;
}
    ?>
</body>
</html>