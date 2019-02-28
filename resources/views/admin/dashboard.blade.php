@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas dentro del sistema en la vista <b>Admin</b>, solo puedes acceder al Home si estas loggeado!!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
