@extends('myProducts/layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post" action="{{ route('myProducts.update', $share->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="share_name" value={{ $share->name }} />
        </div>
        <div class="form-group">
          <label for="price">Share Details :</label>
          <input type="text" class="form-control" name="share_detail" value={{ $share->detail }} />
        </div>
        <div class="form-group">
          <label for="quantity">Share Price:</label>
          <input type="text" class="form-control" name="share_price" value={{ $share->price }} />
        </div>
        <div class="form-group">
          <label for="quantity">Share Stock:</label>
          <input type="text" class="form-control" name="share_stock" value={{ $share->stock }} />
        </div>
        <div class="form-group">
          <label for="quantity">Share Discount:</label>
          <input type="text" class="form-control" name="share_discount" value={{ $share->discount }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection