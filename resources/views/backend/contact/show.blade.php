@extends('backend.master')

@section('title','Contact')

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
                            <h4 class="title content_text_two">{{ $contact->subject }}</h4>
                        </div>
                        <div class="card-content">
                           <div class="row">
                               <div class="col-md-12">
                                   <strong class="content_text_two text">Name: </strong><p class="content_text">{{ $contact->name }}</p><br>
                                   <b class="content_text_two text">Email:</b> <p class="content_text"> {{ $contact->email }}</p> <br>
                                   <strong class="content_text_two text">Message: </strong><hr>

                                   <p class="content_text">{{ $contact->message }}</p><hr>

                               </div>
                           </div>
                            <a href="{{ route('contact.index') }}" class="btn btn-danger">Back</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush