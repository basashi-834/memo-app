<h1>メモ詳細</h1>

<h2>{{ $memo->title }}</h2>

<p>{{ $memo->body }}</p>

<a href="{{ route('memos.edit', $memo->id) }}">編集する</a>

<p>作成日時：{{ $memo->created_at->format('Y年m月d日 H:i') }}</p>
<p>更新日時：{{ $memo->updated_at->format('Y年m月d日 H:i') }}</p>

<form action="{{ route('memos.destroy', $memo->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">削除する</button>
</form>
