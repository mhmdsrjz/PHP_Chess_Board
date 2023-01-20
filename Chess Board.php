<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chess Board</title>
    <style>
        #tbl{
            margin: auto;
            border-collapse: collapse;
            border-spacing: 0;
        }
        #tbl td{
            width: 60px;
            height: 60px;
            text-align: center;
            border: 1px solid black;
        }
        .black{
            background-color: black;
            color: white;
        }
        .white{
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
<table id="tbl">
    <?php
    $counter=1;
    for ($j=1;$j<=8;$j++) {
        echo '<tr>';
        for ($i = 0; $i < 8; $i++) {
            if(($i+$j) %2==0){
                echo '<td class="black">' . $counter. '</td>';
                $counter++;
            }else{
                echo '<td class="white">' . $counter. '</td>';
                $counter++;
            }
        }
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>