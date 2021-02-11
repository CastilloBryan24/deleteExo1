<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MemberController extends Controller
{
    public function index()
    {
        $membre = Member::all();
        return view("membres", compact("membre"));
    }

    public function homme()
    {
        $membre = Member::all();
        return view("homme", compact("membre"));
    }

    public function femme()
    {
        $membre = Member::all();
        return view("femme", compact("membre"));
    }

    public function backoffice()
    {
        $membre = Member::all();
        return view("backoffice", compact("membre"));
    }

    public function store(Request $request)
    {
        $store = new Member;
        $store->name = $request->name;
        $store->age = $request->age;
        $store->gender = $request->gender;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Member::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
