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
            'groupsList' => Group::paginate(2)
        ]);
    }

    //Show single group
    public function show(Group $group) {
        return view('groups.show', [
            'group' => $group
        ]);
    }

    public function create() {
        return view('groups.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('groups', 'name')],
            'blocked' => 'boolean',
        ]);

        Group::create($formFields);
        
        return redirect('/settings/groups');
    }

    public function edit(Group $group) {
        return view('groups.edit', ['group' => $group]);
    }

    public function update(Request $request, Group $group) {
        $formFields = $request->validate([
            'name' => 'required',
            'blocked' => 'boolean',
        ]);

        if (!$request['blocked']) {
            $formFields['blocked'] = 0;
        }
        
        $group->update(['name' => $formFields['name'], 'blocked' => $formFields['blocked']]);        
        return back();
    }

    public function delete(Group $group) { 
        $group->delete();
        return redirect('/settings/groups');
    }
}