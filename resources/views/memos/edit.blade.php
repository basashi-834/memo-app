<h1>メモを編集</h1>

<form action="/memos/{{ $memo->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>タイトル</label>
        <input type="text" name="title" value="{{ $memo->title }}">
    </div>

    <div>
        <label>本文</label>
        <textarea name="body">{{ $memo->body }}</textarea>
    </div>

    <button type="submit">更新</button>
</form>
