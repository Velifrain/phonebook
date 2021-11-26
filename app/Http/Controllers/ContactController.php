<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $contacts = Contact::with('phoneNumbers')->paginate(5);
        $phones = PhoneNumber::all();
        return view('contact.index', compact('contacts', 'phones'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View
    {
        return view('contact.create');
    }

    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        Contact::create($request->only(['name', 'surname', 'address']));
        return redirect()->route('contact.index')->with('success', 'Успешно создан контакт');
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id): View
    {
        $contact = Contact::find($id);
        return view('contact.show')->with('contact', $contact);
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id): void
    {
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $con = Contact::find($id);
        $con->delete();
        return redirect()->route('contact.index')
                         ->with('success', 'Контакт удален');
    }
}
