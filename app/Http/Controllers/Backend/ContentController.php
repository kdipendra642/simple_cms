<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BaseController;
use App\Model\Pages;
use App\Model\Content;
use Illuminate\Support\Str;

class ContentController extends BaseController
{
    protected $folder_path;

    public function __construct()
    {
        $this->folder_path = getcwd() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'content' . DIRECTORY_SEPARATOR;
    }

    public function index()
    {
        $all_content = Content::all();
        return view('backend.content.index', compact('all_content'));
    }

    public function create()
    {
        $all_pages = Pages::all();
        return view('backend.content.create', compact('all_pages'));
    }

    public function store(Request $request)
    {
        $content = new Content();

        if ($request->hasfile('cover')) {
            parent::createFolderIfNotExist($this->folder_path);
            $file = $request->file('cover');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($this->folder_path, $filename);
            $content->cover = $filename;
        }

        $content->title = $request->title;
        $content->slug = Str::slug($request->title);
        $content->pages_id = $request->pages_id;
        $content->description = $request->description;
        $content->foreign_references = $request->foreign_references;

        $content->save();

        $notification = array(
            'message' => 'Page added successfully.',
            'alert-type' => 'success',
        );

        return redirect()->route('backend.content.index')->with($notification);
    }

    public function edit($id)
    {
        $all_pages = Pages::all();
        $content = Content::find($id);

        return view('backend.content.edit', compact('all_pages', 'content'));
    }

    public function update(Request $request, $id)
    {
        $content = Content::find($id);

        $destination = $this->folder_path . $content->cover;

        if ($request->hasfile('cover')) {
            unlink($destination);
            parent::createFolderIfNotExist($this->folder_path);
            $file = $request->file('cover');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($this->folder_path, $filename);
            $content->cover = $filename;
        }

        $content->title = $request->title;
        $content->slug = Str::slug($request->title);
        $content->pages_id = $request->pages_id;
        $content->description = $request->description;
        $content->foreign_references = $request->foreign_references;

        $content->update();

        $notification = array(
            'message' => 'Content updated successfully.',
            'alert-type' => 'success',
        );

        return redirect()->route('backend.content.index')->with($notification);
    }

    public function delete($id)
    {
        $content = Content::find($id);

        $destination = $this->folder_path . $content->cover;

        if (file_exists($destination)) {
            unlink($destination);
        }

        $content->delete();

        $notification = array(
            'message' => 'Content deleted successfully.',
            'alert-type' => 'success',
        );

        return redirect()->route('backend.content.index')->with($notification);
    }
}
