<?php

if(isset($_POST['send'])) {
    $date = date("Y-m-d H:i:s", time());

    $dbQuery = $dbConnect->prepare('INSERT INTO comments (name, comment, date) VALUES (?, ?, ?)');
    $dbQuery->execute([$_POST['name'], $_POST['comment'], $date]);
}

function showComments ($dbConnect) {
    $dbQuery = $dbConnect->prepare('SELECT * FROM comments ORDER BY  date DESC');
    $dbQuery->execute();
    include $_SERVER['DOCUMENT_ROOT'] . "/template/blockComments.php";
}


