@extends('layouts.app')
@section('title')
moro
@stop
@section('content')

    <div class="container">
      <br>
      <br>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Account</th>
            <th>Edit</th>
            <th>Delete</th>

          </tr>
          @foreach($user as $user)
           <tr> 
              <td>
                {{$user->name}}
              </td>
              <td>
                {{$user->email}}
               </td>
               <td>
                {{$user->account_type}}
              </td>


                <td>
                <a href="http://localhost/www2016/public/user/{{$user->id}}/edit"><button type="button" class="btn btn-success btn-sm">Edit</button>
              </td>

              <td>
                {!!Form::open([
                    'method' =>'delete',
                    'route' => ['user.destroy', $user->id]
                ])!!}
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                {{Form::close('Delete')}}
              </td>




               </tr>
 @endforeach             
        </table> 


      </div>

</form>
@stop