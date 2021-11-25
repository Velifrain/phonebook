<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;

class ContactsController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $contacts = Contacts::latest()->paginate(5);
        return view('contacts.index', compact('contacts'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View
    {
        return view('contacts.create');
    }

    /**
     * @param ContactsRequest $request
     * @return RedirectResponse
     */
    public function store(ContactsRequest $request)
    {
        Contacts::create($request->only(['name', 'surname', 'address']));
        return redirect()->route('contacts.index')->with('success', 'Успешно создан контакт');
    }

    /**
     * @param $id
     */
    public function show($id): void
    {
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
        $con = Contacts::find($id);
        $con->delete();
        return redirect()->route('contacts.index')
                         ->with('success', 'Контакт удален');
    }
}
