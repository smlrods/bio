<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageInfoRequest;
use App\Models\PageInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageInfoController extends Controller
{
    public function edit(Request $request)
    {
        $user = auth()->user();
        $pageInfo = $user->pageInfo;

        return view('pageinfo/edit', ['pageInfo' => $pageInfo]);
    }

    public function update(PageInfoRequest $request)
    {
        $pageInfo = auth()->user()->pageInfo;

        $pageInfo->fill($request->validated());

        if ($request->hasFile('logo')) {
            if ($pageInfo->logo_url) {
                // Delete the existing file from storage
                $urlParts = explode('/', $pageInfo->logo_url);

                $filename = end($urlParts);

                Storage::disk('public')->delete('uploads/' . $filename);
            }

            // Upload the new file
            $file = $request->file('logo');
            $filename = $file->store('uploads', 'public');

            // Update the record with the new file URL
            $pageInfo->logo_url = asset('storage/' . $filename);
        }

        $pageInfo->save();

        return redirect()->back();
    }
}
