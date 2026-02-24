<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LangVisitor;
use Illuminate\Support\Facades\Session;

class LangSwitchController extends Controller
{
    public function switchLanguage(Request $request)
    {
        $language = trim($request->language);

        if ($language == "english") {
            $data = [
                'message' => 'Language successfully changed.',
                'category' => 'success'
            ];
        } else {

            // Replace this with real translation check logic
            $translationCheck = true; 

            if ($translationCheck) {
                $data = [
                    'message' => 'Language successfully changed.',
                    'category' => 'success'
                ];
            } else {
                $data = [
                    'message' => 'इस पृष्ठ का हिंदी अनुवाद निर्माणाधीन है।',
                    'category' => 'error'
                ];
            }
        }

        Session::put('sess_lang', $language);

        $this->langVisitors($request->controller, $request->page);

        return redirect()->route('home');

    }


    public function translationCheck(Request $request)
    {
        if (Session::has('sess_lang') && Session::get('sess_lang') == "hindi") {

            // Replace with real translation check
            $translationCheck = false;

            if ($translationCheck) {
                $data = [
                    'message' => 'Language not changed.',
                    'category' => 'error'
                ];
            } else {
                Session::put('sess_lang', 'english');

                $data = [
                    'message' => 'Language successfully changed.',
                    'category' => 'success'
                ];
            }

        } else {
            $data = [
                'message' => 'Language not changed.',
                'category' => 'error'
            ];
        }

        $this->langVisitors($request->controller, $request->page);

        return response()->json($data);
    }


    private function langVisitors($controller, $method)
    {
        $ipaddress = request()->ip();
        $url = url($controller . '/' . $method);

        $language = Session::get('sess_lang', 'english');

        LangVisitor::create([
            'ipaddress' => $ipaddress,
            'url' => $url,
            'language' => $language,
            'status' => '1'
        ]);
    }
}

