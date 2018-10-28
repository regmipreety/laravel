@extends('myProducts/layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <a href='{{route("myProducts.create")}}' class="btn btn-primary">Create new Product</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Stock Name</td>
          <td>Stock Details</td>
          <td>Stock Price</td>
          <td>Stock Quantity</td>
          <td>Discount</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($shares as $share)
        <tr>
            <td>{{$share->id}}</td>
            <td>{{$share->name}}</td>
            <td>{{$share->detail}}</td>
            <td>{{$share->price}}</td>
            <td>{{$share->stock}}</td>
            <td>{{$share->discount}}</td>
            <td><a href="{{ route('myProducts.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('myProducts.destroy', $share->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection