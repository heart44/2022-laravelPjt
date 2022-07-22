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
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>제목</th>
                <th>작성일</th>
                <th>조회수</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $item)
                <tr class="row" data-id={{ $item->id }}>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->hits }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        const rowList = document.querySelectorAll('.row');
        if(rowList) {
            rowList.forEach(item => {
                item.addEventListener('click', e => {
                    location.href = `/boards/show?id=${item.dataset.id}`;
                });
            });
        }
    </script>
</body>
</html>
