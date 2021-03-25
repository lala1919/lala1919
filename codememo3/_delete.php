<?php
    $no = $_GET['no'];
    require ('_conn.php');

    $sqldelete = "DELETE FROM `codeMemo` WHERE `codeMemo`.`no` = $no";
    $result = mysqli_query($conn, $sqldelete);
    if ($result) {
        echo "<script>location.href='components.php';</script>";
    }
?>