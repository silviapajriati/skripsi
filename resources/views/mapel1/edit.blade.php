@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    <a href="{{ url('/mapel1') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{ URL::route('datamapel1') }}"><i class="fa fa-dashboard"></i> Data Mapel Kelas I</a></li>
    <li class="active">Edit Data Mapel Kelas I</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Data Mapel Kelas I</h3>
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

                        <form method="POST" action="{{ url('/mapel1/' . $data->id_mapel) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('mapel1.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
