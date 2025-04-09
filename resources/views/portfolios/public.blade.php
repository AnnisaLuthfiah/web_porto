@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Portofolio Publik</h2>

    <div class="row">
        @foreach($portfolios as $portfolio)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $portfolio->title }}</h5>
                    <p class="card-text">{{ Str::limit($portfolio->description, 100) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
