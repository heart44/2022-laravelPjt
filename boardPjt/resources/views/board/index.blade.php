<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>boards index</h1>
    <div>아무거나</div>
    <div>
        <a href="<?= route('boards.create') ?>">
            <button type="button">글쓰기</button>
        </a>
        <a href="<?= route('boards.show', ['i_board' => 10]) ?>">
            <button type="button">디테일</button>
        </a>
    </div>
</body>
</html>