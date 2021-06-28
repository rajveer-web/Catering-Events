@extends('backend.master')

@section('title','Category')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link rel ="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
    <!-- MDBootstrap Datatables  -->
    <link href="css/addons/datatables.min.css" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    

@endpush



@section('content')
<br><br>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   <a href="{{ route('category.create') }}" class="btn btn-primary context_text_three">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="content_text_three">All Categories</h4>
                        </div>
                        <div class="card-content">
                            <table id="example" class="display table table-striped table-bordered table-sm"  cellspacing="0" width="100%">
                                <thead class="text-primary content_text"><tr>
                                <th class="th-sm"><b>ID</b></th>
                                <th class="th-sm"><b>Name</b></th>
                                <th><b>Slug</b></th>
                                <th><b>Created At</b></th>
                                <th><b>Updated At</b></th>
                                <th><b>Action</b></th>
                                </tr></thead>
                                <tbody>
                                    @foreach($categories as $key=>$category)
                                        <tr>
                                            <td class="content_text" >{{ $key + 1 }}</td>
                                            <td class="content_text" data-search="{{ $category->name }}">{{ $category->name }}</td>
                                            <td class="content_text">{{ $category->slug }}</td>
                                            <td class="content_text">{{ $category->created_at }}</td>
                                            <td class="content_text">{{ $category->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')                                                                                                       
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $category->id }}').submit();
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

