@extends('layouts.app')

@section('content')
<h1>Edit Car</h1>

<form action="{{ route('cars.update', $car) }}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{ $car->name }}">
    <input type="text" name="founded" value="{{ $car->founded }}">
    <input type="text" name="description" value="{{ $car->description }}">

    <button type="submit">
        Update
    </button>
</form>

@endsection
