<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

if (!function_exists('ktLang')) {

    function ktLang($key)
    {
        $language = Session::get('sess_lang', 'english');

        // English
        if ($language == 'english') {
            $label = DB::table('kt_label')
                ->where('kt_label_name', $key)
                ->first();

            return $label->kt_label_value ?? $key;
        }

        // Hindi
        $label = DB::table('kt_label')
            ->leftJoin('kt_lang_sub_label', 
                'kt_lang_sub_label.kt_label_id', '=', 'kt_label.kt_label_id')
            ->where('kt_label.kt_label_name', $key)
            ->select(
                'kt_lang_sub_label.kt_sub_lang_name'
            )
            ->first();

        return $label->kt_sub_lang_name ?? $key;
    }
}
