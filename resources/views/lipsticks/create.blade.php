@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Lipstick</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('lipsticks.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" class="form-control" id="brand" name="brand" required>
                            </div>

                            <div class="form-group">
                                <label for="lipstick_category_id">Category</label>
                                <select class="form-control" id="lipstick_category_id" name="lipstick_category_id" required>
                                    @foreach($lipstickCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Lipstick</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
