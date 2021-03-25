<?php
    require ('_conn.php');
    // htmlspecialchars : 태그 등의 특수문자를 코드로 인식안하고 문자로 인식해주는 메소드,뒤에 ENT_QUOTES, 'UTF-8' 는 세트로 같이 써주는거.
    // nl2br : 개행을 br로 인식해주는 메소드
    $title = nl2br(htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8'));
    $content = nl2br(htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8'));
    $type = $_POST['type'];

    if(!$title||!$content) {
        echo "<script>alert('필수항목 미입력');history.back();</script>";
    } else {
        $sqlwrite = "INSERT INTO `codeMemo` (`no`, `title`, `type`, `content`) VALUES (NULL, '$title', '$type', '$content');";
        mysqli_query($conn, $sqlwrite);
        echo "<script>location.href='index.php';</script>";
    }
?>