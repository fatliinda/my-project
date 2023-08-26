@extends('layouts.app')

@section('content')
<h1> Create car</h1>



<form action='/cars'method='POST' enctype='multipart/form-data'>
@csrf
<input type='file' name='image'>
<input type='text' name ='name'>
<input type='text' name ='founded'>
<input type='text' name ='description'>

<button type='submit'>

    Create
</button>
@if($errors->any())
@foreach($errors->all() as $error)
    {{$error}}
@endforeach
@endif
</form>



@endsection

