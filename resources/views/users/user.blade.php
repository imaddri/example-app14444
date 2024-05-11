@extends('users.layout')
@section('content')
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="{{route('card.index')}}" class="btn btn-primary">Card REQUEST</a>
</div>

<h3 class="text-center">Request Type</h3>

@foreach ($TypeRequests as $item)
<div class="card">
    <div class="card-body">
    <h5 class="card-title">{{$item->NameRequest}}</h5>
    <form action="{{ route('card.store') }}" method="POST"  >
        @csrf
        <input type="hidden" name="id" value="{{ $item->id }}" />
        <button><a type="submit" class="btn btn-success">Request</a>
        
    @method('POST')</button>
</form>

</div>
</div>

@endforeach
<div class="mb-3 card">
    <div class="card-body">
        <textarea class="form-control mb-2" rows="4" id="comment"></textarea>
        <a href="#" class="btn btn-success">REQUEST</a>
    </div>
</div>
@endsection
