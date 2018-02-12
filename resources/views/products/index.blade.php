@extends('layouts.app')

@section('content')
<script>
var txt = $("#list option:selected").text();
</script>
    <div class="container">
      <span>Select the kategory</span>
      <select class="form-control" name="valinta" id="list">
        @foreach($products as $product)
        <a href="http://localhost/www2016/public/products/{{$product->id}}/edit"><option>Lamput</option>
        <option>Liinavaatteet/pyyhkeet</option>
        <option>Astiat</option>
        <option>Wc-tarvikkeet</option>
        <option>Hotelli electroniikka</option>
        @endforeach
      </select>
      <br>
      <br>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Kategory</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Show</th>
            <th>Create</th>
            <th>lisää</th>
          </tr>
          
         @foreach($products as $product)
        


            <tr>
              <td>
                {{$product->name}}

              </td>
              <td>
                {{$product->price}}
              </td>
              <td>
                {{$product->kategory}}
              </td>
              <td>
                <a href="http://localhost/www2016/public/products/{{$product->id}}/edit"><button type="button" class="btn btn-success btn-sm">Edit</button>
              </td>
              <td>
                {!!Form::open([
                    'method' =>'delete',
                    'route' => ['products.destroy', $product->id]
                ])!!}
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                {{Form::close('Delete')}}
              </td>

               <td>
                <a href="http://localhost/www2016/public/products/{{$product->id}}"><button type="button" class="btn btn-success btn-sm">Show</button>
              </td>

               <td>
                <a href="http://localhost/www2016/public/products/create"><button type="button" class="btn btn-success btn-sm">Create</button>
              </td>
              <td>
                
              <button type="button" class="btn btn-danger btn-sm">Lisää</button>
  
              </td>
            </tr>

          @endforeach
        </table> 
      </div>

@stop

