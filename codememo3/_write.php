<?php
    require ('_conn.php');
    // htmlspecialchars : 태그 등의 특수문자를 코드로 인식안하고 문자로 인식해주는 메소드
    // nl2br : 개행을 br로 인식해주는 메소드
    $title = nl2br(htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8'));
    $content = nl2br(htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8'));
    $type = $_POST['type'];

    // 오류 필터링 : $title, $content 없으면 등록해달라고 얼럿 띄우고 , 뒤로 간다. 있을 때 실행된다.
    if(!$title||!$content) {
        echo "<script>alert('필수항목 미입력');history.back();</script>";
    } else {
        if($type==`python`){
        $sqlpython = "INSERT INTO `python` (`no`, `title`, `type`, `content`) VALUES (NULL, '$title', '$type', '$content');";
        } else {
            $sqlwrite = "INSERT INTO `codeMemo` (`no`, `title`, `type`, `content`) VALUES (NULL, '$title', '$type', '$content');";
        }
    //mysqli_query 함수는 mysqli_connect 를 통해 연결된 객체를 이용하여 MySQL 쿼리를 실행시킴
    //mysqli_query([연결 객체], [쿼리]);
        mysqli_query($conn, $sqlwrite);
        mysqli_query($conn, $sqlpython);

        echo "<script>location.href='components.php';</script>";
    }
?>



