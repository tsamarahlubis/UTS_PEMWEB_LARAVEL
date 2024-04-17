@extends('admin.layout')

@section('title')
    Inboxes |
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Inboxes</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">
                <a href="{{ route('admin.index') }}">Dashboard</a>
            </div>
            <div class="breadcrumb-item active">
                Inboxes
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if (Session::has('status'))
                <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
            @endif
            <table class="table table-responsive-sm table-striped table-vertical-align">
                <thead class="thead-dark">
                <tr>
                    <th style="width: 20px;">No</th>
                    <th>Message</th>
                    <th>Respond</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($models as $key => $model)
                    <tr class="{{ ($model->respond) ? '':'un-viewed' }}">
                        <td>{{ $key+1 }}</td>
                        <td>
                            <b>Name : {{ $model->name }}</b> <br>
                            <span>Email : {{ $model->email }}</span> <br>
                            <span>Message : {{ $model->message }}</span> <br>
                            <span class="text-muted">Publish : {{ $model->created_at }}</span>
    
                        </td>
                        <td>
                            <span>{{ ($model->respond) ? $model->respond:'Not yet responded' }}</span>
                        </td>
                        <td>
                            <!-- /btn-group-->
                            <div class="btn-group">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="{{ route('admin.inboxes.edit', $model->id) }}">Reply</a>
                                    <form action="{{ route('admin.inboxes.destroy', $model->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="dropdown-item">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /btn-group-->
                        </td>
                    </tr>
                @endforeach
                @if ($models->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center"> <b>Table is empty</b> </td>
                    </tr>
                @endif
                </tbody>
            </table>
            {{ $models->links() }}
        </div>
    </div>
</section>
@stop