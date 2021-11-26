@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <div class="container">
        <div class="m-auto mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Адресс</th>
                    <th>Номер телефона</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->surname }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>{{ $contact->phoneNumbers->implode('phone_number', ', ') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
