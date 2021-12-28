<?php
    $title = $_POST['title'];
    $writer = $_POST['writer'];
    $content = $_POST['content'];  
    $major = $_POST['major'];
    $semester = $_POST['semester'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📚HGU_OK📚</title>
</head>
<style>
    .outer {
        display: flex;
        align-items: center;
    }
    .inner {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
    body {
        background-image: url('https://www.veritas-a.com/news/photo/201303/15329_2191_3958.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    div.title {
        border: solid 2px #3847c7d0;
        background-color: #f7f3f3;
        border-radius: 8px;
        width: 200px;
        height: 20px;
        margin:0 auto;
        padding: 3px;
   
    }
    div.name {
        border: solid 2px #3847c7d0;
        background-color: #f7f3f3;
        border-radius: 8px;
        width: 200px;
        height: 20px;
        margin:0 auto;
        padding: 3px;

    }
    div.content {
        border: solid 2px #3847c7d0;
        background-color: #f7f3f3;
        border-radius: 8px;
        width: 300px;
        height: 400px;
        margin:0 auto;
        padding: 3px;
    }
    h3 {
        text-align: center;
        font-size: 25px;
    }

    div.major {
        text-align: center;
        font-style: italic;
        font-size: 20px;
        
    }

</style>
<body>
    <h3>🌸🌼입력하신 내용은 다음과 같습니다! 확인 부탁드립니다:D🌸🌼</h3>
    <div class = "major">🙋🏻‍♀️<?= $major?> <?= $semester?>학기 학생이시군요!!🙋🏻</div><br>
    >
    <div class="title"> 제목 : <?= $title?></div>
    <div class="name"> 이름 : <?= $writer?> </div>
    
    <br>
    <div class="content" style> 문의사항 : <?= $content?> </div>
</body>
</html>