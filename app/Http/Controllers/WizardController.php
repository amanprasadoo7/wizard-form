<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class WizardController extends Controller
{
    public function step1()
    {
        // return "yes";
        return view('wizard.step1');
    }

    public function postStep1(Request $request)
    {
        try {
            $validateData = $request->validate([
                'field1' => 'required',
                'field2' => 'required',
                'field3' => 'required',
                'contact_number' => ['required', 'regex:/^\d{10}$/', 'unique:form_data,contact_number'],
            ]);
            session()->put('step1_data', $validateData);
            $step1DataId = $validateData['contact_number'];
            return redirect()->route('wizard.step2', ['step1DataId' => $step1DataId]);
        } catch (ValidationException $e) {
            $failedRules = $e->validator->failed();

            if (isset($failedRules['contact_number']['Unique'])) {
                return redirect()->back()->with('error', 'The contact number is already taken.');
            } else {
                throw $e;
            }
        }
    }

    public function step2($step1DataId)
    {
        return view('wizard.step2', compact('step1DataId'));
    }

    public function postStep2(Request $request)
    {
        try {
            $validateData = $request->validate([
                'field4' => 'required',
                'field5' => 'required',
                'email' => ['required', 'email', 'unique:form_data,email'],
            ]);

            $step1Data = session()->get('step1_data');
            $mergedData = array_merge($step1Data, $validateData);
            session()->put('step2_data', $mergedData);
            return redirect()->route('wizard.step3');
        } catch (ValidationException $e) {
            $failedRules = $e->validator->failed();

            if (isset($failedRules['email']['Unique'])) {
                return redirect()->back()->with('error', 'The email address is already taken.');
            } else {
                throw $e;
            }
        }
    }

    public function step3()
    {
        return view('wizard.step3');
    }

    public function postStep3(Request $request)
    {
        $step1Data = session()->get('step1_data');
        $step2Data = session()->get('step2_data');
        $allData = array_merge($step1Data, $step2Data);
        // dd($allData);

        FormData::create($allData);
        session()->forget(['step1_data', 'step12_data']);
        return redirect()->route('wizard.step0')->with('success', 'Form Submitted Successfully');
    }

    public function step0()
    {
        $allData = FormData::get();
        // dd($allData);
        return view('wizard.step0', compact('allData'));
    }
}
