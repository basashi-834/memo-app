<h1>メモを編集</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <ul>
@endif
<form action="{{ route('memos.update', $memo->id) }}" method="POST">
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
