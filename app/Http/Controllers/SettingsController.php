<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index() {
        return view('settings.index', [
            'settings' => Settings::first()->get()
        ]);
    }

    public function edit() {
        return view('settings.edit', ['settings' => Settings::first()->get()]);
    }

    public function update(Request $request) {
        $formFields = $request->validate([
            'name_congregation' => 'required',
        ]);

        $settings = Settings::first()->get();
        
        $settings[0]->update(['name_congregation' => $formFields['name_congregation']]);        
        return redirect()->route('group.index');
    }
}
