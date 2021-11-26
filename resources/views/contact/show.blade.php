@extends('layouts.app')

@section('content')
    <div class="container m-auto py-24">
        <div class="text-center">
            <h3>{{ $contact->name }}</h3>
        </div>
        <div class="py-10">
            <div class="m-auto">

                <span>{{ $contact->surname }}</span><br>
                <span>{{ $contact->address }}</span>
                <div>
                    <a href="{{ route('phone-number.create', $contact->id) }}" class="btn btn-success mt-5"
                       role="button">Добавить номер</a>
                </div>
                <table class="table">
                    <tr>
                        <th>Номер</th>
                        <th></th>
                    </tr>
                    @foreach($contact->phoneNumbers as $phone)
                        <tr>
                            <td>{{ $phone['phone_number'] }}</td>
                            <td>
                                <form action="{{ route('phone-number.destroy',$phone['id']) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
