<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Controllers\Controller;
use Barryvdh\TranslationManager\Manager;
use Illuminate\Http\Request;
use Barryvdh\TranslationManager\Controller;
use Barryvdh\TranslationManager\Models\Translation;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Collection;
use Tanmuhittin\LaravelGoogleTranslate\Commands\TranslateFilesCommand;


class TranslationController extends Controller
{

    public function index($groupKey = null)
    {
        return $this->getIndex($groupKey);
    }

    public function getView($groupKey = null)
    {
        return $this->getIndex($groupKey);
    }

    public function postAddLocale(Request $request)
    {
        $request->validate([
            'new-locale' => 'required|min:2|max:3|regex:/^[A-Za-z]+$/',
            'locale_name' => 'required|string|max:10|regex:/^[A-Za-z]+$/',
        ]);
        $locales = $this->manager->getLocales();
        $newLocale = str_replace([], '-', trim($request->input('new-locale')));
        if (!$newLocale || in_array($newLocale, $locales)) {
            return redirect()->back();
        }
        $this->manager->addLocale($newLocale);
        return redirect()->back();
    }

    public function postRemoveLocale(Request $request)
    {

        return redirect()->back();

    }

    public function gsImport(Request $request)
    {
        Artisan::call('translation_sheet:pull');
        Artisan::call('translations:import', ['--replace' => true]);
        $request->session()->flash('success', ['text' => __('backend.gs_import_success')]);
        return response()->json(['status' => 'OK']);

    }

    public function gsExport(Request $request)
    {
        Artisan::call('translation_sheet:push');
        $request->session()->flash('success', ['text' => __('backend.gs_export_success')]);
        return response()->json(['status' => 'OK']);

    }
}
