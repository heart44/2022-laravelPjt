<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- 주석처리 --}}
    <div id="ldata" data-id="{{ $data->id }}"></div>
    <div>
        <a href={{ url('/boards') }}>
            <button type="button">홈</button>
        </a>
        <a href={{ url('/boards') }}>
            <button type="button">수정</button>
        </a>
        <button type="button" id="btnDel">삭제</button>
    </div>
    <div>제목 : {{ $data->title }}</div>
    <div>조회수 : {{ $data->hits }}</div>
    <div>작성일 : {{ $data->created_at }}</div>
    <div>내용</div>
    <div>{{ $data->ctnt }}</div>

    <script>
        const ldata = document.querySelector('#ldata');
        const btnDel = document.querySelector('#btnDel');
        if(btnDel) {
            btnDel.addEventListener('click', e => {
                // alert(ldata.dataset.id);
                if(!confirm('삭제하시겠습니까?')) { return; }
                location.href = `/boards/destroy?id=${ldata.dataset.id}`;
            })
        }
    </script>
</body>
</html>
