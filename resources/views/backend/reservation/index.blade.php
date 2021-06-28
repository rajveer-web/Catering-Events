@extends('backend.master')

@section('title','Reservation')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<br><br>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title content_text_two">Reservations</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="example" class="display table table-striped table-bordered table-sm"  cellspacing="0" width="100%">
                                <thead class="text-primary content_text">
                                <th><b>ID</b></th>
                                <th><b>Name</b></th>
                                <th><b>Email</b></th>
                                <th><b>Phone</b></th>
                                <th><b>Category</th>
                                <th><b>Date</th>
                                <th><b>Time</th>
                                <th><b>Address</b></th>
                                <th><b>Status</b></th>
                                <th><b>Created At</b></th>
                                <th><b>Action</b></th>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $key=> $reservation)
                                        <tr>
                                            <td class="content_text" width="2%">{{ $key + 1 }}</td>
                                            <td class="content_text" width="5%" data-search="{{ $reservation->name }}">{{ $reservation->name }}</td>
                                            <td class="content_text" width="10%">{{ $reservation->email }}</td>
                                            <td class="content_text" width="10%">{{ $reservation->phone }}</td>
                                            <td class="content_text" width="10%">{{ $reservation->category }}</td>
                                            <td class="content_text" width="15%">{{ $reservation->date }}</td>
                                            <td class="content_text" width="10%">{{ $reservation->time }}</td>
                                            <td class="content_text" width="25%">{{ $reservation->address }}</td>
                                              
                                            
                                            <th>
                                                @if($reservation->status == true)
                                                    <span class="label label-info">Confirmed</span>
                                                @else
                                                    <span class="label label-danger">not Confirmed yet</span>
                                                @endif

                                            </th>
                                            <td>{{ $reservation->created_at }}</td>
                                            <td>
                                                @if($reservation->status == false)
                                                    <form id="status-form-{{ $reservation->id }}" action="{{ route('reservation.status',$reservation->id) }}" style="display: none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">done</i></button>
                                                @endif
                                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destory',$reservation->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $reservation->id }}').submit();
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