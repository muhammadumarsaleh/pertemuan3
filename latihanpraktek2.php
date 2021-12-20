<html>
<head>
    <title></title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="10">
    <?php
    for( $a = 1; $a <= 5; $a++ ) {
        echo "<tr>";
        for($b = 1; $b <= 5; $b++) {
            echo "<td>$a,$b</td>";
        }
        echo "</tr>";

    }
    
    ?>
</table>
</body>
</html>
