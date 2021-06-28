@extends('backend.master')

@section('title','Items')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<br><br>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('item.create') }}" class="btn btn-primary">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">All Items</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="example" class="display table table-striped table-bordered table-sm"  cellspacing="0" width="100%">
                                <thead class="text-primary content_text">
                                <th><b>ID</b></th>
                                <th><b>Name</b></th>
                               
                                <th><b>Category Name</b></th>
                                <th><b>Description</b></th>
                                <th><b>Price</b></th>
                                <th><b>Created At</b></th>
                                <th><b>Updated At</b></th>
                                <th><b>Action</b></th>
                                </thead>
                                <tbody>
                                    @foreach($items as $key=>$item)
                                        <tr>
                                            <td class="content_text">{{ $key + 1 }}</td>
                                            <td class="content_text" data-search="{{ $item->name }}">{{ $item->name }}</td>
                                            <td class="content_text">{{ $item->category->name }}</td>
                                            <td class="content_text">{{ $item->description }}</td>
                                            <td class="content_text">{{ $item->price }}</td>
                                            <td class="content_text">{{ $item->created_at }}</td>
                                            <td class="content_text">{{ $item->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('item.edit',$item->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $item->id }}').submit();
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