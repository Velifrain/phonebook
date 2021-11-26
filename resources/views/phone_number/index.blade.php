@extends('layouts.app')

@section('title-block')Телефонные номера@endsection

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12 mt-5">
                <h3>Телефонные номера</h3>
                <a href="{{ route('phone-number.create') }}" class="btn btn-success mt-5">Добавить номер</a>
            </div>
        </div>
        @include('includes.flash-message')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Номер</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($phoneNumber as $num)
                <tr>
                    <td>{{ $num->phone_number }}</td>
                    <td>
                        <form action="{{ route('phone-number.destroy',$num->id) }}" method="post">
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
        <div class="float-right justify-content-center">
            {!! $phoneNumber->links() !!}
        </div>
    </div>

@endsection
