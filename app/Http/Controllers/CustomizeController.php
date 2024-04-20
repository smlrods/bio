<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateThemeRequest;
use Illuminate\Http\Request;

class CustomizeController extends Controller
{
    public function edit()
    {
        $user = auth()->user();

        $theme = $user->theme;

        return view('customize.edit', [
            'theme' => $theme
        ]);
    }

    public function update(UpdateThemeRequest $request)
    {
        $theme = auth()->user()->theme;

        $theme->update($request->validated());

        return redirect()->back()->with('success', 'Item updated successfully.');
    }
}
