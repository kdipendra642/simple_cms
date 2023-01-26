<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SiteSetting;
use App\Http\Controllers\Backend\BaseController;
use Illuminate\Support\Str;

class SiteSettingsController extends BaseController
{
    protected $logo_folder_path;
    protected $favicon_folder_path;

    public function __construct()
    {
        $this->logo_folder_path = getcwd() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'logo' . DIRECTORY_SEPARATOR;
        $this->favicon_folder_path = getcwd() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'favicon' . DIRECTORY_SEPARATOR;
    }

    public function index()
    {
        $site_setting = SiteSetting::where('id', 1)->first();
        return view('backend.settings.index', compact('site_setting'));
    }

    public function update(Request $request, $id)
    {
        $site_setting = SiteSetting::find($id);

        $site_setting->site_name = $request->site_name;
        $site_setting->meta_title = $request->meta_title;
        $site_setting->social_profile_fb = $request->social_profile_fb;
        $site_setting->social_profile_twitter = $request->social_profile_twitter;
        $site_setting->social_profile_insta = $request->social_profile_insta;
        $site_setting->social_profile_youtube = $request->social_profile_youtube;
        $site_setting->social_profile_linkedin = $request->social_profile_linkedin;
        $site_setting->contact_phone = $request->contact_phone;
        $site_setting->contact_email = $request->contact_email;
        $site_setting->contact_address = $request->contact_address;

        if ($request->hasfile('logo')) {
            parent::createFolderIfNotExist($this->logo_folder_path);
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($this->logo_folder_path, $filename);
            $site_setting->logo = $filename;
        }

        if ($request->hasfile('favicon')) {
            parent::createFolderIfNotExist($this->favicon_folder_path);
            $file = $request->file('favicon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($this->favicon_folder_path, $filename);
            $site_setting->favicon = $filename;
        }

        $site_setting->update();

        $notification = array(
            'message' => 'Settings updated successfully.',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
