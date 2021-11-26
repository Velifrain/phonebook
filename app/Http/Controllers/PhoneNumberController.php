<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Http\Requests\PhoneNumberRequest;
use Illuminate\Support\Facades\DB;

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
    public function create(PhoneNumber $numbers): View
    {
        $cons = DB::table('contacts')->get();
        return view('phone_number.create', compact('cons', 'numbers'));
    }

    /**
     * @param PhoneNumberRequest $request
     * @return RedirectResponse
     */
    public function store(PhoneNumberRequest $request): RedirectResponse
    {
        $pn = PhoneNumber::create($request->only(['phone_number']));
        $pn->contact()->associate((int)$request->contact_id);
        $pn->save();
        return redirect()->route('phone-number.index')->with('success', 'Номер успешно добавлен');
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
     * @param  PhoneNumber  $phoneNumber
     */
    public function edit(PhoneNumber $phoneNumber): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param PhoneNumber  $phoneNumber
     */
    public function update(Request $request, PhoneNumber $phoneNumber): void
    {
        //
    }

    /**
     * @param PhoneNumber $phoneNumber
     * @return RedirectResponse
     */
    public function destroy(PhoneNumber $phoneNumber): RedirectResponse
    {
        $phoneNumber->delete();
        return redirect()->route('contact.index')->with('success', 'Номер успешно удален');
    }
}
