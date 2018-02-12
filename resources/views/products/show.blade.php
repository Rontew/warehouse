@extends('layouts.app')
@section('title')
    {{$products -> name}}
@stop
@section('content')

    <div class="container">
      <br>
      <br>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>kategory</th>
            <th>Picture</th>
            <th>Edit</th>
          </tr>
            <tr>
              <td>
                {{$products->name}}
              </td>
              <td>
                {{$products->price}}
              </td>
              <td>
                {{$products->kategory}}
              </td>
               <td>
                <img src="{{$products->picture}}" class="img-thumbnail" title="Default picture">
              </td>
              <td>
                <a href="http://localhost/www2016/public/products/{{$products->id}}/edit"><button type="button" class="btn btn-success btn-sm">Edit</button>
              </td>
            </tr>
        </table> 

      </div>

</form>
@stop