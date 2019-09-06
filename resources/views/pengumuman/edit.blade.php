@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    <a href="{{ url('/pengumuman') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{ URL::route('datapengumuman') }}"><i class="fa fa-dashboard"></i> Data Pengumuman</a></li>
    <li class="active">Edit Data Pengumuman</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Data Pengumuman</h3>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="card mt-5">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/pengumuman/' . $data->id_p) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('pengumuman.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
