@extends('backend.master')

@section('title','Event')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<br><br>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('event.create') }}" class="btn btn-primary">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">All Event</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="example" class="display table table-striped table-bordered table-sm"  cellspacing="0" width="100%">
                                <thead class="text-primary content_text">
                                <th><b>ID</b></th>
                                <th><b>Name</b></th>
                                <th><b>Image</b></th>
                                <th><b>Detail</b></th>
                                <th><b>Price</b></th>
                                <th><b>Created At</b></th>
                                <th><b>Updated At</b></th>
                                <th><b>Action</b></th>
                                </thead>
                                <tbody>
                                    @foreach($events as $key=>$event)
                                        <tr>
                                            <td class="content_text_four">{{ $key + 1 }}</td>
                                            <td class="content_text_four" data-search="{{ $event->name }}">{{ $event->name }}</td>
                                            <td  class="content_text_four"><img class="img-responsive img-thumbnail" src="{{ asset('uploads/event/'.$event->image) }}" style="height: 100px; width: 200px" alt=""></td>
                                            <td class="content_text_four" width="200" height="100">{{ $event->detail }}</td>
                                            <td class="content_text_four">{{ $event->price }}</td>
                                            <td class="content_text_four">{{ $event->created_at }}</td>
                                            <td class="content_text_four">{{ $event->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('event.edit',$event->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $event->id }}" action="{{ route('event.destroy',$event->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $event->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush