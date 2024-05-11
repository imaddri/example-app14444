@extends('users.layout')
@section('content')




    @if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    {{$message}}
  </div>

  @endif

  <h1 style="text-align: center;">Order list</h1>
    <div class="container">

        <div class="cv">
        <table class="table table-hover">
          <thead>
            <tr>
                <th>no</th>
                
                <th>Registration_number</th>
                <th>Request type</th>

            </tr>
          </thead>
          <tbody>

            @foreach ( $requests as $item )
 <tr class="table-primary">
             <td>  {{ $item->id}} </td>
             <td>  {{ $item->Registration_number}} </td>
             <td>  {{ $item->request_type}} </td>
             <td>
             <form action=" {{route('requests.destroy',$item->id)}} " method="post">
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
        {!! $requests->links()!!}
        </div>
      </div>





@endsection