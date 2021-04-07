<?php
if ((!isset($_POST['text'])) || empty($_POST['text'])){
    echo '
        <form action="sol.php" method="post">
            <label>Введите текст для инверсии</label>
            <br>
            <input type="text" name="text">
            <br>
            <input type="submit" value="Отправить">
        </form>
    ';
}else{

    $string = $_POST['text'];
    unset($_POST['text']);

    function revers($string){
        preg_match_all('/./u', $string, $ar);
        return implode(array_reverse($ar[0]));
    }
    echo '<b>'.revers("$string").'</b>';
    echo '
        <form action="sol.php">
            <input type="submit" value="Назад">
        </form>';
}





