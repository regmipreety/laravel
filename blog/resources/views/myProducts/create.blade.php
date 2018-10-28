@extends('myProducts/layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('myProducts.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Share Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Share detail :</label>
              <input type="text" class="form-control" name="detail"/>
          </div>
          <div class="form-group">
              <label for="quantity">Share price:</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <div class="form-group">
              <label for="quantity">Share stock:</label>
              <input type="text" class="form-control" name="stock"/>
          </div>
          <div class="form-group">
              <label for="quantity">Share Discount:</label>
              <input type="text" class="form-control" name="discount"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection