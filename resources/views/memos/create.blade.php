<h1>メモを追加</h1>

<form action="/memos" method="POST">
    @csrf
    
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
