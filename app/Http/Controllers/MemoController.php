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
        $request->validate(
            [
                'title' => 'required|max:100',
                'body' => 'required',
            ],
            [
                'title.required' => 'タイトルを入力して下さい',
                'title.max' => 'タイトルは100文字以内で入力してください',
                'body.required' => '本文を入力してください',
            ]
        );
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
        $memo = Memo::findOrFail($id);

        return view('memos.show', ['memo' => $memo]);
    }

    public function edit($id)
    {
        $memo = Memo::findOrFail($id);

        return view('memos.edit', ['memo' => $memo]);
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|max:100',
                'body' => 'required',
            ],
            [
                'title.required' => 'タイトルを入力してください',
                'title.max' => 'タイトルは100文字以内で入力してください',
                'body.required' => '本文を入力してください',
            ]
        );

        $memo = Memo::findOrFail($id);

        $memo->title = $request->input('title');
        $memo->body = $request->input('body');

        $memo->save();

        return redirect('/memos/' . $id);
    }

    public function destroy($id)
    {
        $memo = Memo::findOrFail($id);

        $memo->delete();

        return redirect('/memos');
    }
}
