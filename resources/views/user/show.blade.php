@extends('layouts.app')
@section('title')
    {{$user -> name}}
@stop
@section('content')

    <div class="container">
      <br>
      <br>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Account</th>

          </tr>
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
            </tr>
        </table> 

      </div>

</form>
@stop