<h1>メモ詳細</h1>

<h2>{{ $memo->title }}</h2>

<p>{{ $memo->body }}</p>

<a href="/memos/{{ $memo->id }}/edit">編集する</a>

<form action="/memos/{{ $memo->id }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">削除する</button>
</form>
