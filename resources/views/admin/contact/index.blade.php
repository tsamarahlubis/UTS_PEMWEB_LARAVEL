@extends('admin.layout')

@section('title')
    Contact |
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Contact</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">
                    Contact
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.contact.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>
                    Add Contact</a>
            </div>
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
                @endif
                <table class="table table-responsive-sm table-striped table-vertical-align">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 20px;">#</th>
                            <th>Title</th>
                            <th>Address</th>
                            <th>Keterangan</th>
                            <th>Schedule</th>
                            {{-- <th>Google_maps</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $d->title }}</td>
                                <td>{{ $d->location }}</td>
                                <td>No. Telp: {{ $d->phone_number }} <br>
                                    Email: {{ $d->email }}
                                </td>
                                
                                <td>{{ $d->status }}</td>
                                {{-- <td>
                                    <textarea class="border-0" name="" id="" cols="80" rows="6" readonly>{{ $d->google_maps_link }}</textarea>
                                </td> --}}
                                <td>
                                    <!-- /btn-group-->
                                    <div class="btn-group">
                                        <button class="btn btn-warning dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                            style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.contact.edit', $d->id) }}">Edit</a>
                                            <form action="{{ route('admin.contact.destroy', $d->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /btn-group-->
                                </td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach
                        @if ($data->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center"> <b>Table is empty</b> </td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </section>
@stop
