<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use Flash;

class SettingsController extends Controller
{
    public function index() {
        
        $settings = Settings::first();
        return view('settings.index', compact('settings'));
    }

    public function store(Request $request) {
        
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'full_name' => 'required',
            // 'profile_image' => 'required',
            'email' => 'required',
            'desc_contact' => 'required'
        ]);

        // return $request->title;

        $settings = Settings::first();
        $settings->title = $request->title;
        $settings->description = $request->description;
        $settings->full_name = $request->full_name;
        $settings->age = $request->age;
        $settings->residence = $request->residence;
        $settings->address = $request->address;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->skype = $request->skype;
        $settings->desc_contact;
        if (!empty($request->profile_image)) {
            $image_name = time() . '.' . $request->profile_image->getClientOriginalExtension();
            $request->profile_image->move(public_path('uploads/settings/'), $image_name);
            $settings->profile_image = $image_name;
        }
        $settings->yearsExperience = $request->yearsExperience;
         if (!empty($request->cv)) {
            $cv_name = time() . '.' . $request->cv->getClientOriginalExtension();
            $request->cv->move(public_path('uploads/settings/'), $cv_name);
            $settings->cv = $cv_name;
        }
        $settings->save();

        Flash::success('Settings updated successfully.');

        return redirect(route('settings.index'));
    }

    public function delete_cv() {

        $settings = Settings::first();
        $settings->cv = '';
        $settings->save();

        Flash::success('CV Deleted successfully.');
        return redirect(route('settings.index'));
    }
}
