@extends('backend.master')

@section('title','Feedback')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<br><br>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="content_text_three">Feedback</h4>
                        </div>
                        <div class="card-content">
                            <table id="example" class="display table table-striped table-bordered table-sm"  cellspacing="0" width="100%">
                                <thead class="text-primary content_text">
                                <th><b>ID</b></th>
                                <th><b>Name</b></th>
                                <th><b>Subject</b></th>
                                <th><b>Sent At</b></th>
                                <th><b>Action</b></th>
                                </thead>
                                <tbody>
                                    @foreach($feedback as $key=>$feedback)
                                        <tr>
                                            <td class="content_text">{{ $key + 1 }}</td>
                                            <td class="content_text" data-search="{{ $feedback->name }}">{{ $feedback->name }}</td>
                                            <td class="content_text">{{ $feedback->subject }}</td>
                                            <td class="content_text">{{ $feedback->created_at }}</td>
                                            <td>
                                                <a href="{{ route('feedback.show',$feedback->id) }}" class="btn btn-info btn-sm"><img src ="/img/icon.png" width="50px" height="50px"></a>

                                                <form id="delete-form-{{ $feedback->id }}" action="{{ route('feedback.destroy',$feedback->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $feedback->id }}').submit();
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