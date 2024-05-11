@extends('users.layout')

@section('content')

<h2 class="text-center">Order</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Number de registement</th>
            <th scope="col">Type de request</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $TypeRequests as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->NameRequest}}</td>
                
                <td>
                    <form action="{{route('Request.destroy',$item->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button  type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>

@endsection