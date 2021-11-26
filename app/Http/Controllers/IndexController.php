<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\PhoneNumber;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;

class IndexController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View
    {
        $contacts = Contact::with('phoneNumbers')->paginate(15);
        $phones = PhoneNumber::all();
        return view('index.index', compact('contacts', 'phones'));
    }
}
