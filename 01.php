<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table.tr, td {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }

        table {
            margin: 100px auto;
        }

        td {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
<table>
    <?php
        for($i=1;$i<=9;$i++){
            echo "<tr>";
            for($j=1;$j<=9;$j++){
                 if($j>$i){
                    echo "<td></td>";
                } else{
                     echo "<td>{$j}x{$i}=".($i*$j)."</td>";
                }
             }
            echo "</tr>";

        }
    ?>
</table>


</body>
</html>