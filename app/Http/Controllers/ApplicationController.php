<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function view(Request $request)
    {
        $step = $request->input('q', Auth::user()->application_step);

        switch ($step) {
            case 0:
                return view('application.payment');
                break;

            case 1:
                return view('application.personal');
                break;

            case 2:
                return view('application.academic');
                break;

            case 3:
                return view('application.courses');
                break;

            case 4:
                return view('application.declaration');
                break;

            case 5:
                return view('application.status');
                break;

            default:
                return view('application.payment');
                break;
        }
    }

    public function payment()
    {
        $user = Auth::user();
        $user->update(['application_step' => 1]);
        $user->save();

        return redirect()->route('application.index');
    }

    public function personal(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'first_name'   => ['required', 'string', 'max:255'],
            'middle_name'  => ['required', 'string', 'max:255'],
            'last_name'    => ['required', 'string', 'max:255'],
            'gender'       => ['required', 'in:male,female'],
            'phone_number' => ['required', 'regex:/^\d{9}$/'],
            'national_id'  => ['nullable', 'string', 'max:20'],
        ]);

        $validated['user_id'] = $user->id;

        Applicant::create($validated);

        // Advance application step
        $user->update(['application_step' => 2]);

        return redirect()->route('application.index')->with('success', 'Personal details saved successfully.');
    }

    public function academic()
    {
        $user = Auth::user();
        $user->update(['application_step' => 3]);
        $user->save();

        return redirect()->route('application.index');
    }

    public function courses()
    {
        $user = Auth::user();
        $user->update(['application_step' => 4]);
        $user->save();

        return redirect()->route('application.index');
    }

    public function declaration()
    {
        $user = Auth::user();
        $user->update(['application_step' => 5]);
        $user->save();

        return redirect()->route('application.index');
    }
}
