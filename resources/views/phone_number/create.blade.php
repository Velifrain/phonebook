@extends('layouts.app')

@section('title-block')Добавление номера@endsection

@section('content')
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <h3 class="my-5 text-center">Добавить номер</h3>

            <form action="{{ route('phone-number.index') }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="validationNumber">Номер телефона</label>
                    <input type="text" name="phone_number"
                           class="form-control @error('phone_number') is-invalid @enderror" id="validationNumber"
                           placeholder="Введите номер телефона">
                    @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="validNumber">Контакты</label>
                    <select class="form-control @error('contact_id') is-invalid @enderror"
                            id="validNumber"
                            name="contact_id">
                        @foreach($cons as $con)
                            <option value="{{ $con->id }}">{{ $con->name }}</option>
                        @endforeach
                    </select>
                    @error('contact_id')
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
