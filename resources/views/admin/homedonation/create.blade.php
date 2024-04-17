@extends('admin.layout')

@section('title')
    Create HomeDonation |
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create HomeDonation</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="{{ route('admin.homedonation.index') }}">HomeDonation</a>
                </div>
                <div class="breadcrumb-item active">
                    Create HomeDonation
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                @endif
                <form class="form-horizontal" action="{{ route('admin.homedonation.store') }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-form-label" for="title">Title</label>
                        <div class="controls">
                            <input class="form-control" id="title" size="16" type="text" name="title"
                                placeholder="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="description">description</label>
                        <div class="controls">
                            <textarea class="form-control" id="description" name="description" cols="30" rows="10" style="min-height: 60px;"
                                placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="amount">amount</label>
                        <div class="controls">
                            <textarea class="form-control" id="amount" name="amount" cols="30" rows="10" style="min-height: 60px;"
                                placeholder="amount"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="amount_collected">amount collected</label>
                        <div class="controls">
                            <textarea class="form-control" id="amount_collected" name="amount_collected" cols="30" rows="10" style="min-height: 60px;"
                                placeholder="amount_collected"></textarea>
                        </div>
                    </div>


                        <div class="form-group">
                            <label class="col-form-label" for="img-container">Image</label>
                            <div class="d-flex">
                                <img src="{{ asset('static/admin/img/default.png') }}" alt="photo">
                                <div class="custom-file ml-3">
                                    <input id="photo" type="file" name="image" class="custom-file-input"
                                        onchange="document.querySelector('.form-group img').src = window.URL.createObjectURL(this.files[0])"
                                        accept="image/*">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                            <button class="btn btn-primary ml-2" type="submit">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </section>
@stop
