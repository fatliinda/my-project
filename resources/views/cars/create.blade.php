@extends('layouts.app')

@section('content')
<h1> Create car</h1>



<form action='/cars'method='POST'>
@csrf
<input type='text' name ='name'>
<input type='text' name ='founded'>
<input type='text' name ='description'>

<button type='submit'>

    Create
</button>
</form>




@endsection

