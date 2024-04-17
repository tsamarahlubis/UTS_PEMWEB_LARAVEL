@extends('admin.layout')

@section('title')
Create Portofolio Category |
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Portofolio Categories</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">
                <a href="{{ route('admin.index') }}">Dashboard</a>
            </div>
            <div class="breadcrumb-item">
                Portofolio
            </div>
            <div class="breadcrumb-item">
                <a href="{{ route('admin.portofolio.categories.index') }}">Categories</a>
            </div>
            <div class="breadcrumb-item">
                {{ $model->name }}
            </div>
            <div class="breadcrumb-item active">
                Edit
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if (Session::has('status'))
            <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
            @endif
            @if ($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            @endif
            <form class="form-horizontal" action="{{ route('admin.portofolio.categories.update', $model->id) }}" method="post">
                {{ method_field('put') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-form-label" for="name">Name</label>
                    <div class="controls">
                        <input class="form-control" id="name" size="16" type="text" name="name" placeholder="Name of the category" value="{{ $model->name }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="desc">Description</label>
                    <div class="controls">
                        <textarea class="form-control" id="desc" name="description" cols="30" rows="10" style="min-height: 60px;" placeholder="Description of the category" required>{{ $model->description }}</textarea>
                    </div>
                </div>
                <div class="form-actions">
                    <a href="{{ route('admin.portofolio.categories.index') }}" tabindex="-1" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                    <button class="btn btn-primary ml-2" type="submit">
                        <i class="fa fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@stop
