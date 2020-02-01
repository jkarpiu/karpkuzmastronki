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

        return view('view', ['title' => 'Bug #'.$bug_id, 'bug' => $bug]);
    }
    public function search(){
        $searching = $_GET['item'];
        $found = \App\Bugs::where('name', 'LIKE','%'.$searching.'%')
            ->orWhere('desc', 'LIKE', '%'.$searching.'%')
            ->orderBy('created_at', 'desc')
            ->take(50)
            ->get();
        return view('search', ['title' => 'Szukaj: '.$searching, 'finded' => $found]);
    }
}
