<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 02.11.2015
 * Time: 12:27
 */

$array = ['Alex', 'Inc', 'Dmitry'];

$k = 0;
while ($k < count($array)){
    echo '<input type="checkbox" name="array' . $k . '" id="array' . $k . '" value="' . $array[$k] . '"'; if(isset($_POST['array' . $k])) echo "checked='checked'"; echo "/>"; echo "<em> $array[$k] </em><br />";
    $k++;
}