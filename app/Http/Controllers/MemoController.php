<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index()
    {
        $memos = Memo::all();

        return view('memos.index', ['memos' => $memos]);
    }

    public function create()
    {
        return view('memos.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');

        $memo = new Memo();

        $memo->title = $title;
        $memo->body = $body;

        $memo->save();

        return redirect('/memos');
    }

    public function show($id)
    {
        $memo = Memo::find($id);

        return view('memos.show', ['memo' => $memo]);
    }

    public function edit($id)
    {
        $memo = Memo::find($id);

        return view('memos.edit', ['memo' => $memo]);
    }

    public function update(Request $request, $id)
    {
        $memo = Memo::find($id);

        $memo->title = $request->input('title');
        $memo->body = $request->input('body');

        $memo->save();

        return redirect('/memos/' . $id);
    }

    public function destroy($id)
    {
        $memo = Memo::find($id);

        $memo->delete();

        return redirect('/memos');
    }
}
