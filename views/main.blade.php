@extends("layout/master")
@section('content')
@if(isset($_SESSION['user']))
<h1>Hello world</h1>
@endif
<table>
    <tr>
        <th>번호</th>
        <th>제목</th>
        <th>내용</th>
        <th>글쓴이</th>
    </tr>
    @foreach ($list as $item)

        <tr>
            <td>
                {{ $item->id }}
            </td>
            <td>
            {{ $item->title }}
            </td>
            <td>
            {{ $item->content }}
            </td>
            <td>
            {{ $item->writer }}
            </td>
        </tr>
    @endforeach;
</table>
@endsection