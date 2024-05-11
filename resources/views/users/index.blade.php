@extends('users.layout')
@section('content')




    @if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    {{$message}}
  </div>

  @endif

  <h1 style="text-align: center;">Registration orders</h1>
    <div class="container">

        <div class="cv">
        <table class="table table-hover">
          <thead>
            <tr>
                <th>no</th>
                <th>First_Name</th>
                <th>Family_Name</th>
                <th>Registration_number</th>
                <th>email</th>

            </tr>
          </thead>
          <tbody>

            @foreach ( $users as $item )
 <tr class="table-primary">
             <td>  {{ $item->id}} </td>
             <td>  {{ $item->First_Name}} </td>
             <td>  {{ $item->Family_Name}} </td>
             <td>  {{ $item->Registration_number}} </td>
             <td>  {{ $item->email}} </td>
             <td>
                 <form action=" {{route('users.destroy',$item->id)}} " method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             <a href="http://"></a>
             <a href="http://"></a>


             </td>
         </tr>
            @endforeach



     </tbody>

          </tbody>
        </table>
        {!! $users->links()!!}
        </div>
      </div>





@endsection