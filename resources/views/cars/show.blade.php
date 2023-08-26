@extends('layouts.app')

@section('content')
<h1>{{$car->name}}</h1>
@foreach($car->carModels as $model)

    {{$model['model_name']}};
@endforeach
@foreach($car->engines as $engine)
@if ($model->id==$engine->model_id)
{{$engine->engine_name}}

@endif


    
@endforeach
@endsection