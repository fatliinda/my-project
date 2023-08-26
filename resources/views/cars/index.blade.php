@extends('layouts.app')

@foreach($cars as $car)

    {{$car->name}}

@endforeach

@section('content')
<div class='center'>
<h1 class='redheading'>
            Cars
        </h1>
        <a href='cars/create'><span class='button1'>Add a new car</span></a>

@foreach ($cars as $car)
<div class='center' >
    <a href='/cars//edit'>Edit &rarr</a>
    <form action="" method="POST">
    @csrf
    @method('DELETE') <!-- Use the DELETE method to delete the resource -->
    <button style="background-color: red" type="submit">Delete &rarr;</button>
</form>

    <div >
    

    <span class='uppercase'>founded:{{$car->founded}}</span>
    <h2><a href='/cars/{{$car->id}}'>
    {{$car->name}}
    </a>
    <h2>
    <p>{{$car->model}}</p>
    
</div>
</div>
@endforeach
@endsection
