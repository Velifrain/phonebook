@extends('layouts.app')

@section('title-block')Создание контакта@endsection

@section('content')
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <h3 class="my-5 text-center"> Новый контакт </h3>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="validationName" class="form-label">Имя</label>
                    <input type="text" name="name" id="validationName"
                           class="form-control @error('name') is-invalid @enderror" placeholder="Введите Имя">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="validationSurname" class="form-label">Фамилия</label>
                    <input type="text" name="surname" id="validationSurname"
                           class="form-control @error('surname') is-invalid @enderror" placeholder="Введите Фамилию">
                    @error('surname')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="validationAddress" class="form-label">Адресс</label>
                    <input type="text" name="address" id="validationAddress"
                           class="form-control @error('address') is-invalid @enderror" placeholder="Введите Ваш Адрес">
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
