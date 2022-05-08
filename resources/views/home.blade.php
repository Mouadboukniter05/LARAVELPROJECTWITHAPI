@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <section class="content-header">
        <h1>
        Welcome
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-danger">
            <div class="box-body">
                <div class="text-center">
                    <img src="{{asset('img/download.png')}}" class="rounded float-left" alt="dima wydad" />
                    <p> <strong>we are wydad supporters , we push them to be the best team in africa</strong><br/>
                   <strong> the most titled in morocco </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection
