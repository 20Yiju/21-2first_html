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
    <title>πHGU_OKπ</title>
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
    <h3>πΈπΌμλ ₯νμ  λ΄μ©μ λ€μκ³Ό κ°μ΅λλ€! νμΈ λΆνλλ¦½λλ€:DπΈπΌ</h3>
    <div class = "major">ππ»ββοΈ<?= $major?> <?= $semester?>νκΈ° νμμ΄μκ΅°μ!!ππ»</div><br>
    >
    <div class="title"> μ λͺ© : <?= $title?></div>
    <div class="name"> μ΄λ¦ : <?= $writer?> </div>
    
    <br>
    <div class="content" style> λ¬Έμμ¬ν­ : <?= $content?> </div>
</body>
</html>