<?php
/**
 * Created by PhpStorm.
 * User: katekharitonova
 * Date: 15/01/18
 * Time: 15:38
 */
require_once "../vendor/katekharitonova/bracketed-lib/src/BracketsValidator.php";

$path = readline("Enter path to file with brackets: \r\n");
$string = file_get_contents($path);

if ($string = file_get_contents($path)) {
    $validator = new BracketsValidator();
    try {
        $result = $validator->validateString($string);
        if ($result) {
            echo "Provided line is correctly formatted.\r\n";
        } else {
            echo "Oops, the line did not pass the check.\r\n";
        }
    } catch (Exception $e) {
        echo $e->getMessage() . "\r\n";
    }
}
