<h1>メモ帳</h1>

@forelse ($memos as $memo)
    <h2>
        <a href="{{ route('memos.show',$memo->id) }}">
            {{ $memo->title }}
    </h2>
    <p>{{ $memo->body }}</p>

@empty
    <p>まだメモはありません</p>
@endforelse

<a href="{{ route('memos.create') }}">メモを追加する</a>
