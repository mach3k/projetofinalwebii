@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Você está autenticado!</p>

                    <a href="{{ route('empresa.index') }}">Cadastro de empresas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
