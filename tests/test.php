<?php session_start();
error_reporting( E_ALL );ini_set('display_errors', 1);
?><!DOCTYPE html>
<html>
<head>
    <title>Data table</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php

    require '../src/Pagination.php';

    $pagination = new Justin\Pagination\Pagination(100, 12, $_GET['page']);

    echo $pagination->links();


?>
</body>
</html>