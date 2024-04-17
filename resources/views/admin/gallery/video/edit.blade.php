@extends('admin.layout')

@section('title')
    Edit Video |
@stop

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Gallery Video</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="{{ route('admin.gallery.video.index') }}">Gallery</a>
                </div>
                <div class="breadcrumb-item active">
                    {{ $model->title }}
                </div>
                <div class="breadcrumb-item active">
                    Edit Video
                </div>
            </div>
        </div>
        <!-- /.row-->
        <div class="row">
            <div class="col-lg-12">
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
                        <form class="form-horizontal" action="{{ route('admin.gallery.video.update', $model->id) }}"
                            method="post">
                            {{ method_field('put') }}
                            {{ csrf_field() }}
                            <input type="hidden" name="type" value="video">
                            <div class="form-group">
                                <label class="col-form-label" for="title">Title</label>
                                <div class="controls">
                                    <input class="form-control" id="title" size="16" type="text" name="title"
                                        placeholder="Title of the image" value="{{ $model->title }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="desc">Description</label>
                                <div class="controls">
                                    <textarea class="form-control" id="desc" name="description" cols="30" rows="10" style="min-height: 60px;"
                                        placeholder="Description of the image">{{ $model->description }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="category">Category</label>
                                        <div class="controls">
                                            <select class="form-control" id="category" name="gallery_category_id" required>
                                                <option disabled {{ !$model->gallery_category_id ? 'selected' : '' }}>
                                                    Please select the category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $model->gallery_category_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" for="url">Url Video</label>
                                        <div class="controls">
                                            <input class="form-control" id="url" size="16" type="text"
                                                name="url" placeholder="Url of the video from youtube"
                                                value="{{ $model->url }}">
                                            <span class="help-block">Please enter the full url, example
                                                ('https://www.youtube.com/watch?v=YbJOTdZBX1g')</span>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <a href="{{ route('admin.gallery.video.index') }}" class="btn btn-secondary">
                                            <i class="fa fa-arrow-left"></i> Back
                                        </a>
                                        <button class="btn btn-primary ml-2" type="submit">
                                            <i class="fa fa-save"></i> Update
                                        </button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
    @stop
