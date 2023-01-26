<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BaseController;
use App\Model\Pages;
use Illuminate\Support\Str;

class PagesController extends BaseController
{
    public function index()
    {
        $all_pages = Pages::orderBy('id', 'DESC')->get();
        return view('backend.pages.index', compact('all_pages'));
    }

    public function create()
    {
        return view('backend.pages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'max:255'
        ]);

        $pages = new Pages();
        $pages->title = $request->title;
        $pages->slug = Str::slug($request->title);
        $pages->status = $request->status == TRUE ? '1' : '0';
        $pages->save();

        $notification = array(
            'message' => 'Page added successfully.',
            'alert-type' => 'success',
        );

        return redirect()->route('backend.pages.index')->with($notification);
    }

    public function edit($id)
    {
        $pages = Pages::find($id);
        return view('backend.pages.edit', compact('pages'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'max:255'
        ]);

        $pages = Pages::find($id);

        $pages->title = $request->title;
        $pages->slug = Str::slug($request->title);
        $pages->status = $request->status == TRUE ? '1' : '0';
        $pages->update();

        $notification = array(
            'message' => 'Page updated successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('backend.pages.index')->with($notification);
    }

    public function delete($id)
    {
        $pages = Pages::find($id);
        $pages->delete();

        $notification = array(
            'message' => 'Page updated successfully.',
            'alert-type' => 'success',
        );

        return redirect()->route('backend.pages.index')->with($notification);
    }
}
