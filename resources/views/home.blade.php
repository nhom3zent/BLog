@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
<<<<<<< HEAD
=======
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

>>>>>>> 9bdcf7fc6e0257ee8133446ea88da76d072ac80a
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
