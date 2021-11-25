@extends('layouts.app')

@section('title-block')Список контактов@endsection

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12 margin-tb">
                <h1>Контакты</h1>
                <a href="{{ route('contacts.create') }}" class="btn btn-success mt-5"
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
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->surname }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>
                        <form action="{{ route('contacts.destroy',$contact->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Удалить
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {!! $contacts->links() !!}
@endsection
