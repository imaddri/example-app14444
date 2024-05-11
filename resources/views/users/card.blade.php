
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
        @foreach ( $input as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->Registration_number}}</td>
                <td>{{$item->NameRequest}}</td>
                <td>
                <form action="{{route('Domand.store',$item->id)}}"  method="POST">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}"/>
                    <button type="submit" class="btn btn-success">Accept</button></form>

                </td>
                <td>
                    <form action="{{route('card.destroy',$item->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button  type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="{{route('Request.index')}}"class="btn btn-outline-primary">Request Page </a>
</div>

@endsection
