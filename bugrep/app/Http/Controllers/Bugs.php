<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Request;

class Bugs extends Controller
{
    public function add() {
        $data = Request::only(['bug_name', 'desc', 'when']);
        if (Auth::check()) {
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
        $page -> username = Auth::user() -> name;
        $page -> userID = Auth::id();
        $page->name = $data['bug_name'];
        $page->desc = $data['desc'];
        $page->situation = $data['when'];
        $page->user_ip_remote = $_SERVER['REMOTE_ADDR'];
        $page->save();
        return back(); }
        else
            abort(401);
    }

    public function browse() {
        $list = \App\Bugs::where('fixed', 0)
        ->orderBy('created_at', 'desc')
        ->paginate(20);
        return view('list', ['title' => 'Przeglądaj', 'list' => $list]);
    }

    public function archive() {
        $list = \App\Bugs::where('fixed', 1)
        ->orderBy('created_at', 'desc')
        ->paginate(20);
        return view('list', ['title' => 'Przeglądaj', 'list' => $list]);
    }

    public function view($bug_id) {
        $bug = \App\Bugs::where('id', $bug_id)
            ->take(1)
            ->get();
        $comments = \App\disc::where('active', 1)
            ->where('for_id', $bug_id)
            ->orderBy('fixes', 'desc')
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
        if (Auth::check()) {
            $dataBase = \App\disc::create([]);
            $dataBase -> username = $commentData['username'];
            $dataBase -> content = $commentData['content'];
            $dataBase -> score = 1;
            $dataBase -> for_id = $commentData['bug_id'];
            $dataBase -> userID = Auth::user()->id;
            $dataBase -> save();
            return back();
        }else
            abort(401);
    }

    public function comDelete() {
        $whichComment = Request::only(['comID', 'bugID']);
        $comment = \App\disc::where('for_id', $whichComment['bugID'])
            -> where('id', $whichComment['comID'])->take(1)->first();
        //dd($comment);
        if ($comment -> userID == Auth::user()->id) {
            $comment -> active = false;
            $comment -> save();
            return back();
        }
        abort(401);
    }

    public function complus(){
        $comid = Request::only(['com_id']);
        // dd ($comid);
        \App\disc::where('id', $comid["com_id"]) ->increment("score", 1);
        return back();
    }

    public function comminus(){
        $comid = Request::only(['com_id']);
        // dd ($comid);
        \App\disc::where('id', $comid["com_id"]) ->decrement("score", 1);
        return back();
    }
    public function fixed(){
        $data = Request::all();
        if ($data ['userID'] == Auth::id()) {
            $bug = \App\Bugs::where('id', $data['id']) -> first();
            $bug -> fixed = 1;
            $bug -> fixedBy = "Update";
            $bug -> save();
            return back();
        }else
            abort (401);
    }
    public function fixedByComment(){
        $data = Request::all();
        if ($data ['userID'] == Auth::id()) {
            $bug = \App\Bugs::where('id', $data['id']) -> first();
            $bug -> fixed = 1;
            $comment = \App\disc::where('id', $data['commentID']) -> first();
            $comment -> fixes = 1;
            $bug -> fixedBy = $data['commentID'];
            $comment-> save();
            $bug -> save();
            return back();
        }else
            abort (401);
    }

    public function userProfile($user_id) {
        $user = \App\User::where('id', $user_id) -> take(1) -> get();
        $userBugs = \App\Bugs::where('userID', $user_id)->orderBy('created_at', 'desc')->paginate(10);
        $userComm = \App\disc::where('userID', $user_id) -> where('active', true)->orderBy('created_at', 'desc') -> paginate(10);
        // dd($userComm);
        return view('profile', ['user' => $user, 'myBugs' => $userBugs, 'uComm' => $userComm, 'title' => 'Profil użytkownika'.$user[0]->name]);
    }

}
