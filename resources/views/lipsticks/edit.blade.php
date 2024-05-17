@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Lipstick</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('lipsticks.update', $lipstick->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input type="text" class="form-control" id="brand" name="brand" value="{{ $lipstick->brand }}" required>
                        </div>

                        <div class="form-group">
                            <label for="lipstick_category_id">Category</label>
                            <select class="form-control" id="lipstick_category_id" name="lipstick_category_id" required>
                                @foreach($lipstickCategories as $category)
                                <option value="{{ $category->id }}" {{ $lipstick->lipstick_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Lipstick</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection