<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>boards create</h1>
    <form action="<?= route('boards.store') ?>" method="POST">
        @csrf   <!-- laravel은 보안이 심함, 이거 주면 실행됨, 위치 상관 없음 -->
        <div><label>제목: <input type="text" name="title"></label></div>
        <div><label>내용: <textarea name="ctnt"></textarea></label></div>
        <input type="submit" value="저장">
    </form>
</body>
</html>