<?php

$weervraag = $_POST['weervraag'];

file_put_contents('./questions.txt', $weervraag, FILE_APPEND);

echo file_get_contents('C:/laragon/www/herslimweer/questions.txt');

header("Location: http://herslimweer.test:80/index.html");

?>