@extends('admin.layout')

@section('title')
    Edit {{ $homedonation->title }} |
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit HomeDonation</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    <a href="{{ route('admin.homedonation.index') }}">HomeDonation</a>
                </div>
                <div class="breadcrumb-item">
                    {{ $homedonation->title }}
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
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                @endif
                <form class="form-horizontal" action="{{ route('admin.homedonation.update', $homedonation->id) }}" method="post"
                    enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-form-label" for="title">Title</label>
                        <div class="controls">
                            <input class="form-control" id="title" size="16" type="text" name="title"
                                placeholder="Title of the HomeDonation" value="{{ $homedonation->title }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="desc">Description</label>
                        <div class="controls">
                            <input class="form-control" id="description" size="16" type="text" name="description"
                                placeholder="Description of the HomeDonation" value="{{ $homedonation->description }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="amount">Amount</label>
                        <div class="controls">
                            <input class="form-control" id="amount" size="16" type="text" name="amount"
                                placeholder="Amount of the HomeDonation" value="{{ $homedonation->amount }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="amount_collected">Amount Collected</label>
                        <div class="controls">
                            <input class="form-control" id="amount_collected" size="16" type="text" name="amount_collected"
                                placeholder="Amount Collected of the HomeDonation" value="{{ $homedonation->amount_collected }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="img-container">Image</label>
                        <div class="d-flex">
                            <img class="img-fluid" id="img-container" alt="Donation Gallery" width="100" height="100"
                                src="{{ @$homedonation->image->sm }}" />
                            <div class="custom-file ml-3">
                                <input type="file" name="image" class="custom-file-input"
                                    onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
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
