<?php

namespace App\Helpers;

use App\Models\Settings;

class FunctionHelpers {

	// For Yes Or No
    public static function yesOrNo($number) {
        $number = $number == 1? 'Yes': 'No';
        return $number;
    }

    public static function Settings() {
        $settings = Settings::first();
        return $settings;
    }

}