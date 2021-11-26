<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\PhoneNumber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Http\Requests\PhoneNumberRequest;

class PhoneNumberController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View
    {
        $phoneNumber = PhoneNumber::latest()->paginate(5);
        return view('phone_number.index', compact('phoneNumber'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View
    {
        return view('phone_number.create');
    }

    /**
     * @param PhoneNumberRequest $request
     * @return RedirectResponse
     */
    public function store(PhoneNumberRequest $request): RedirectResponse
    {

        $pn = PhoneNumber::create($request->only(['phone_number']));
        //dd($pn);
        //dd($con = Contact::find(1)->phoneNumbers());
        //$pn->contact()->attach($request->contact_id);

        return redirect()->route('phone_number.index')->with('success', 'Номер успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  PhoneNumber  $phoneNumber
     */
    public function show(PhoneNumber $phoneNumber): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneNumber  $phoneNumber
     */
    public function edit(PhoneNumber $phoneNumber): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhoneNumber  $phoneNumber
     */
    public function update(Request $request, PhoneNumber $phoneNumber): void
    {
        //
    }

    /**
     * @param PhoneNumber $phoneNumber
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PhoneNumber $phoneNumber): RedirectResponse
    {
        $phoneNumber->delete();
        return redirect()->route('phone_number.index')->with('success', 'Номер успешно удален');
    }
}
