@extends('backend.master')

@section('title','Create')

@push('css')

@endpush

@section('content')
<br>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="content_text_two">Add New Category</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="content_text">Name</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush