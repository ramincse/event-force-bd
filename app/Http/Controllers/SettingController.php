<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Show ThemeOption Page
     */
    public function showSettingOption()
    {
        $all_settings = Setting::find(1);
        return view('admin.settings.setting-option', compact('all_settings'));
    }

    /**
     * Data ThemeOption Insert 
     */
    public function insertSettingOption(Request $request)
    {
        $update_setting = Setting::find(1);

        //Logo
        if ($request->hasFile('logo')) {
            $img = $request->file('logo');
            $logo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/settings'), $logo_uname);
            if(!empty($update_setting->logo)){
                unlink('media/settings/' . $update_setting->logo);
            }
        }else{
            $logo_uname = $update_setting->logo;
        }

        //Favicon Icon
        if ($request->hasFile('favicon')) {
            $img = $request->file('favicon');
            $favicon_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/settings'), $favicon_uname);
            if(!empty($update_setting->favicon)){
            unlink('media/settings/' . $update_setting->favicon);
            }
        }else{
            $favicon_uname = $update_setting->favicon;
        }

        $copy_arr = [
            'copy_year' => $request->copy_year,
            'copy_by'   => $request->copy_by,
        ];
        $copy_json = json_encode($copy_arr, JSON_UNESCAPED_SLASHES);

        $social_arr = [
            'facebook_link' => $request->facebook_link,
            'twitter_link'   => $request->twitter_link,
            'youtube_link'   => $request->youtube_link,
        ];
        $social_json = json_encode($social_arr, JSON_UNESCAPED_SLASHES);

        $hotline_arr = [
            'cell_1'    => $request->cell_1,
            'cell_2'    => $request->cell_2,
        ];
        $hotline_json = json_encode($hotline_arr, JSON_UNESCAPED_SLASHES);

        $update_setting ->site_title    = $request->site_title;
        $update_setting ->logo          = $logo_uname;
        $update_setting ->favicon       = $favicon_uname;
        $update_setting ->copyright     = $copy_json;
        $update_setting ->social        = $social_json;
        //$update_setting ->sister        = $sister_json;
        $update_setting ->hotline       = $hotline_json;
        $update_setting ->update();

        return redirect()->route('theme.option')->with('success', 'Data updated Successfull!');
    }
    
}
