<h1>メモを追加</h1>

<form action="{{ route('memos.store') }}" method="POST">
    @csrf
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <ul>
            @else
    @endif

    <div>
        <label>タイトル</label>
        <input type="text" name="title">
    </div>

    <div>
        <label>本文</label>
        <textarea name="body"></textarea>
    </div>

    <button type="submit">保存</button>
</form>
