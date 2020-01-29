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
        $page->fill($data);
        $page->save();
        return back();
    }
}
