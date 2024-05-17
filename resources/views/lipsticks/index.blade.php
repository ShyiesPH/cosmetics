@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a class="btn btn-success" href="{{ route('lipsticks.create') }}">Create Lipstick</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Brand</th>
                                <th scope="col">Category Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lipsticks as $lipstick)

                            <tr>
                                <td>{{ $lipstick->brand }}</td>
                                <td>{{ $lipstick->LipstickCategory->name }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection