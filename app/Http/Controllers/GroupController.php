<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //Show all groups
    public function showAll() {
        return view('groups', [
            'heading' => 'Groups List',
            'groupsList' => Group::all()
        ]);
    }

    //Show single group
    public function showSingle(Group $group) {
        return view('group', [
            'group' => $group
        ]);
    }

    public function showAllApi() {
        return response()->json([
            'groups' => Group::all()]);
    }
}