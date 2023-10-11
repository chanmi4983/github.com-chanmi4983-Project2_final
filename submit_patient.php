<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 환자 정보를 받아옴
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $contact = $_POST["contact"];

    // 여기서 데이터를 처리하거나 저장할 수 있음
    // 예를 들어, 데이터베이스에 저장할 수 있음

    // 간단한 응답 메시지를 반환
    echo "환자 정보가 성공적으로 추가되었습니다.";
}
?>