@extends('layouts.app')

@section('content')

        <div class="container">
        	  <div class="jumbotron">
        	<h1>{{trans('greetings.Hello')}}</h1>
        	<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
            Varaston tilanne
			</button>
			<br>
			<br>
			<a href="http://localhost/www2016/public/products/create"><button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
            Lisää varastoon
			</button>
            <a href="{{ url('/users') }}"><button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
            List users
            </button>

</div>

        </div>
@stop

