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
            'groupsList' => Group::paginate(10)
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

        $formFields['user_id'] = auth()->user()->id;

        Group::create($formFields);
        
        return redirect()->route('group.index');
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
        return redirect()->route('group.show', ['group' => $group->id]);
    }

    public function destroy(Group $group) { 
        $group->delete();
        return redirect()->route('group.index');
    }
}