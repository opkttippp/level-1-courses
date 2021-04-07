<?php
echo '<table border="1" >';

for ($i = 0; $i < 2; $i++) {
    switch ($i) {
        case 0:
            {
                for ($tr = 1; $tr <= 10; $tr++) {
                    echo '<tr>';
                    for ($td = 1; $td <= 5; $td++) {

                        echo '<td>' . " $td x $tr = " . $td * $tr . '</td>';
                    }
                    echo '</tr>';
                }
            }
            break;
        case 1:
        {
            for ($tr = 1; $tr <= 10; $tr++) {
                echo '<tr>';
                for ($td = 6; $td <= 10; $td++) {

                    echo '<td>' . " $td x $tr = " . $td * $tr . '</td>';
                }
                echo '</tr>';
            }
        }
    }
}
echo '</table>';

