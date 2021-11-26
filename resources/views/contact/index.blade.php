@extends('layouts.app')

@section('title-block')Список контактов@endsection

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12 mt-5">
                <h3>Контакты</h3>
                <a href="{{ route('contact.create') }}" class="btn btn-success mt-5"
                   role="button">Добавить контакт</a>
            </div>
        </div>

        @include('includes.flash-message')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Адресс</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td><a href="{{ route('contact.show', $contact->id) }}">{{ $contact->name }}</a></td>
                    <td>{{ $contact->surname }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->phoneNumbers->implode('phone_number', ', ') }}</td>
                    <td>
                        <form action="{{ route('contact.destroy',$contact->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Удалить Контакт
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="float-right justify-content-center">
            {!! $contacts->links() !!}
        </div>
    </div>

@endsection
