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
}
