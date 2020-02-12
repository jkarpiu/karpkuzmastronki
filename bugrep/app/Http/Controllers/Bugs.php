<?php

namespace App\Http\Controllers;

use Request;

class Bugs extends Controller
{
    public function add() {
        $data = Request::only(['bug_name', 'desc', 'when']);
        $valid = \Validator::make(
            $data, [
                'bug_name' => 'required|min:4',
                'desc' => 'required|min:10'
            ]
            );
        if ($valid ->fails()){
            return back()
                -> withErrors($valid)
                -> withInput();
        }
        $page = \App\Bugs::create([]);
        $page->name = $data['bug_name'];
        $page->desc = $data['desc'];
        $page->situation = $data['when'];
        $page->user_ip_remote = $_SERVER['REMOTE_ADDR'];
        $page->save();
        return back();
    }

    public function browse() {
        $list = \App\Bugs::where('fixed', 0)
        ->orderBy('created_at', 'desc')
        ->take(50)
        ->get();
        return view('list', ['title' => 'Przeglądaj', 'list' => $list]);
    }
    public function view($bug_id) {
        $bug = \App\Bugs::where('id', $bug_id)
            ->take(1)
            ->get();
        $comments = \App\disc::where('active', 1)
            ->orderBy('score', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('view', ['comments' => $comments,'title' => 'Bug #'.$bug_id, 'bug' => $bug]);
    }
    public function search(){
        $searching = $_GET['item'];
        $found = \App\Bugs::where('name', 'LIKE','%'.$searching.'%')
            ->orWhere('desc', 'LIKE', '%'.$searching.'%')
            ->orderBy('created_at', 'desc')
            ->take(1)
            ->get();
        return view('search', ['title' => 'Szukaj: '.$searching, 'finded' => $found]);
    }

    public function commentadd(){
        $commentData = Request::only(['username', 'content', 'bug_id']);
        $dataBase = \App\disc::create([]);
        $dataBase -> username = $commentData['username'];
        $dataBase -> content = $commentData['content'];
        $dataBase -> score = 1;
        $dataBase -> for_id = $commentData['bug_id'];
        $dataBase -> save();
        return back();
    }

    public function complus(){
        $comid = Request::only('com_id');
        $score = \App\disc::where('id', $comid);
        dd($score);
      //  $score -> score = $score -> score + 1;
    }

    public function comminux(){
        $comid = Request::only('com_id');
        $score = \App\disc::where('id', $comid) -> score;
        dd ($score);
      //  $score = $score - 1;
    }
}
