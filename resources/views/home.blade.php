@extends('backend.master')

@section('content')
<br><br>
<div class="container">
<div class="row">
                <div class="col-md-12">
                   
                    
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="content_text_three">{{ __('Dashboard') }}</h4>
                        </div>
                

                <div class="card-body content_text_three">
                    @if (session('status'))
                        <div class="alert alert-success center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <img src="img/2.jpg"  height="600px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
