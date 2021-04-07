<?php
echo  '<table border="1" >';

for ($i = 0; $i < 2; $i++) {
    switch ($i){
        case 0:
            {
                for ($tr = 1; $tr <= 10; $tr++) {
                    echo '<tr>';
                    for ($td = 1; $td <= 5; $td++) {

                        echo '<td>' . "<span style='color:#ffff00'> $td </span> x <span style='color:#0000ff'> $tr </span> = " . d($td, $tr) . '</td>';

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

                    echo '<td>' . "<span style='color:#ffff00'> $td </span> x <span style='color:#0000ff'> $tr </span> = " . d($td, $tr) . '</td>';
                }
                echo '</tr>';
            }
        }
    }
}
function d($x,$y)
{
    if (($x * $y) > 9 && ($x * $y) < 100) {
        $ret = [];
        $var = $x * $y;
        for ($i = 0; $var > 0; $i++) {
            $ret[$i] = $var % 10;
            $var = floor($var / 10);
            $www = $ret[0];
            $rrr = $var;
            return ('<span style="color:#ff0000">' . $rrr . '</span>' . '<span style="color:#00ff00">' . $www . '</span>');
        }
    }
    elseif (($x * $y) === 100){
        return ('<span style="color:#ff0000">'. 1 .'</span>'.'<span style="color:#00ff00">'. 0 .'</span>'.'<span style="color:#ff0000">'. 0 .'</span>');
    }
    else{
        $ddd = ($x * $y);
        return ('<span style="color:#ff0000">' . $ddd . '</span>');
    }
}
echo '</table>';
