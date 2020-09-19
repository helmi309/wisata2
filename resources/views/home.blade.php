@extends('admin.admin')

@section('content')
<div class="container-fluid">
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
                    @roleCanAccess('admin')
                    You are logged in!
                    @endroleCanAccess
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
