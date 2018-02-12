@extends('layouts.app')
@section('content')

<div class="container">

{!!Form::model($user,[
	'method' =>'patch',
	'route' => ['user.update', $user->id]
])!!}

<span>Name:</span>
<label class="sr-only" >Name:</label>
    <input type="text" class="form-control" name="name" value="{{$user->name}}"><br>
<label class="sr-only"></label>
<span>Email:</span>
<input type="text" class="form-control" name="email" value="{{$user->email}}"><br>
<button type="submit" class="btn btn-primary" value="Edit">Edit</button>
{{Form::close()}}
</div>
@stop