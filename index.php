<?php
$html=file_get_contents("https://dou.ua/lenta/");

$re = '/<article\s+.*\s*.*\s+.*href="(.*)">\s*(.*)\s*.*\s*.*\s*.*\s*.*\s*.*\s*.*\s*.*\s*.*\s*.*>\s*(.*?)\s*?</';
preg_match_all($re, $html, $match);
//    file_put_contents("test.txt",$match[1][0]."\n".$match[2][0]."\n".$match[3][0]."\n");
//    echo count($match[1])."<br>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="libs/bootstrap.min.css" rel="stylesheet">
    <link href="css/my_style.css" rel="stylesheet">
    <script type="text/javascript" src="libs/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <title>Parsing</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php for($i=0;$i<count($match[1]);$i++):?>
            <h3 class="page-header"><a href="<?=$match[1][$i]?>"><?=$match[2][$i]?></a></h3>
            <p><?=$match[3][$i]?></p>
            <?php endfor;?>
        </div>
    </div>
</body>
</html>
