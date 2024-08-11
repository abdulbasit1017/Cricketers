@extends('layout.app')


@section('content')
    <form action="/form" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name" id="">
        <label for="">email</label>
        <input type="email" name="email" id="">
        <label for="">password</label>
        <input type="text" name="password" id="">
        <label for="">phone number</label>
        <input type="number" name="phone_number" id="">
        <button type="submit">submit</button>
    </form>
@endsection
