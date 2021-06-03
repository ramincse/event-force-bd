<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Show Footer Page
     */
    public function showFooterOption()
    {
        $all_footers = Footer::find(1);
        return view('admin.settings.setting-footer', compact('all_footers'));
    }

    /**
     * Footer Data Insert 
     */
    public function insertFooterOption(Request $request)
    {
        $update_footers = Footer::find(1);

        $co_office_arr = [
            'c_name'    => $request->c_name,
            'c_address' => $request->c_address,
            'c_phone'   => $request->c_phone,
            'c_cell1'   => $request->c_cell1,
            'c_cell2'   => $request->c_cell2,
            'c_cell3'   => $request->c_cell3,
            'c_cell4'   => $request->c_cell4,
            'c_email1'  => $request->c_email1,
            'c_email2'  => $request->c_email2,
        ];
        $co_office_json = json_encode($co_office_arr, JSON_UNESCAPED_SLASHES);

        $dha1_office_arr = [
            'd1_name'    => $request->d1_name,
            'd1_address' => $request->d1_address,
            'd1_cell1'   => $request->d1_cell1,
            'd1_cell2'   => $request->d1_cell2,
            'd1_email1'  => $request->d1_email1,
            'd1_email2'  => $request->d1_email2,
        ];
        $dha1_office_json = json_encode($dha1_office_arr, JSON_UNESCAPED_SLASHES);

        $dha2_office_arr = [
            'd2_name'    => $request->d2_name,
            'd2_address' => $request->d2_address,
            'd2_cell1'   => $request->d2_cell1,
            'd2_cell2'   => $request->d2_cell2,
            'd2_email1'  => $request->d2_email1,
            'd2_email2'  => $request->d2_email2,
        ];
        $dha2_office_json = json_encode($dha2_office_arr, JSON_UNESCAPED_SLASHES);

        $update_footers ->footer1    = $co_office_json;
        $update_footers ->footer2    = $dha1_office_json;
        $update_footers ->footer3    = $dha2_office_json;
        //$update_setting ->footer4  = $copy_json;
        $update_footers ->update();

        return redirect()->route('theme.footer')->with('success', 'Data updated Successfull!');

    }

}
