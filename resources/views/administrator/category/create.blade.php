@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Category</h1>
        <form action="{{ route('administrator.category.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
