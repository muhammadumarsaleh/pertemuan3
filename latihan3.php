<!-- contoh pengaplikasian pada table -->
<table border="1" cellpadding="20" cellspacing="0">
    <?php
        for( $i=1; $i<=5; $i++) {
            echo "<tr>";
            for($j=1; $j<= 6; $j++){
                echo "<td>$i,$j</td>";
            }
            echo "<tr>";

        }   
    ?>


</table>