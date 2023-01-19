<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessBoard</title>
</head>
<body>
    <table>
            <?php>
                for($i=0; $i<=8; $i++){
                    echo"<tr>";
                    for($j=0; $j<=8; $j++){
                        if($j===$i){
                            echo"<td style="width=30px; height=30px; background="black""></td>"
                        } else{
                            echo"<td style= "width=30px height=30px; background="black""></td>"
                    }
                    }
                    echo"<tr>";
                }
            ?>
</table>
    
</body>
</html>