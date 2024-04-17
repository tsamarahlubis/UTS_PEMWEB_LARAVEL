@extends('admin.layout')

@section('title')
    Edit Contact|
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Contact</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">
                <a href="{{ route('admin.index') }}">Dashboard</a>
            </div>
            <div class="breadcrumb-item">
                <a href="{{ route('admin.contact.index') }}">Contact</a>
            </div>
            <div class="breadcrumb-item">
                {{ $model->title }}
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
            <form class="form-horizontal" action="{{ route('admin.contact.update', $model->id) }}" method="post" enctype="multipart/form-data">
                {{ method_field('put') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-form-label" for="title">Title</label>
                    <div class="controls">
                        <input class="form-control" id="title" size="16" type="text" name="title" placeholder="Title of contact" value="{{ $model->title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="location">Address</label>
                    <div class="controls">
                        <textarea class="form-control" id="location" name="location" cols="30" rows="10" style="min-height: 60px;" placeholder="Location">{{ $model->location }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="phone_number">Phone Number</label>
                    <div class="controls">
                        <textarea class="form-control" id="phone_number" name="phone_number" cols="30" rows="10" style="min-height: 60px;" placeholder="Phone Number">{{ $model->phone_number }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="email">Email</label>
                    <div class="controls">
                        <textarea class="form-control" id="email" name="email" cols="30" rows="10" style="min-height: 60px;" placeholder="email">{{ $model->email }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="status">Schedule</label>
                    <div class="controls">
                        <textarea class="form-control" id="status" name="status" cols="30" rows="10" style="min-height: 60px;" placeholder="Status">{{ $model->status }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="google_maps_link">Location</label>
                    <div class="controls">
                        <textarea class="form-control" id="google_maps_link" name="google_maps_link" cols="30" rows="10" style="min-height: 60px;" placeholder="Google maps link">{{ $model->google_maps_link }}</textarea>
                    </div>
                </div>
        
                <div class="form-actions">
                    <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Cancel
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
