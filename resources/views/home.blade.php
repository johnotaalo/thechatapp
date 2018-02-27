@extends('layouts.chatlayout')

@section('content')
<!-- <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div> -->
<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <div class = 'user-profile'>
                        <div class="float-left user-image">
                            <img src="{{ URL::to(Storage::url('68854.jpg')) }}" class="rounded-circle" alt="{{ Auth::user()->name }}">
                        </div>                        
                        <div class="float-left user-details">
                            <p><b>{{ Auth::user()->name }}</b></p>
                            <p><small>{{ Auth::user()->email }}</small></p>
                        </div>
                    </div>                    
                </li>

                <li class="media my-1 ml-2 message-holder">
                    <img class="align-self-center mr-3 user-message-image rounded-circle" src="{{ URL::to(Storage::url('girl.svg')) }}" alt="Generic placeholder image">
                    <div class="media-body" style = ''>
                        <p class="mt-0 mb-0"><b>Lorna Cherotich</b></p>
                        <p class="mt-0 mb-0"><small>20th January 2018</small></p>
                    </div>
                </li>
                <li class="media my-1 ml-2 message-holder">
                    <img class="align-self-center mr-3 user-message-image rounded-circle" src="{{ URL::to(Storage::url('man.svg')) }}" alt="Generic placeholder image">
                    <div class="media-body" style = ''>
                        <p class="mt-0 mb-0"><b>Glory Otaalo</b></p>
                        <p class="mt-0 mb-0"><small>20th January 2018</small></p>
                    </div>
                </li>
                <li class="media my-1 ml-2 message-holder">
                    <img class="align-self-center mr-3 user-message-image rounded-circle" src="{{ URL::to(Storage::url('user-image-with-black-background.svg')) }}" alt="Generic placeholder image">
                    <div class="media-body" style = ''>
                        <p class="mt-0 mb-0"><b>Adima Mesa</b></p>
                        <p class="mt-0 mb-0"><small>20th January 2018</small></p>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
@endsection
