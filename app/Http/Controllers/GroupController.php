<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GroupController extends Controller
{
    //Show all groups
    public function index() {
        return view('groups.index', [
            'heading' => 'Groups List',
            'groupsList' => Group::all()
        ]);
    }

    //Show single group
    public function show(Group $group) {
        return view('groups.show', [
            'group' => $group
        ]);
    }

    // public function showAllApi() {
    //     return response()->json([
    //         'groups' => Group::all()]);
    // }

    public function create() {
        return view('groups.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('groups', 'name')],
        ]);
        $request->blocked = 1;

        Group::create($request->all());
        
        return redirect('/settings/groups');
    }
}