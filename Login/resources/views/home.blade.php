@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header, p-3 mb-2 bg-secondary text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="text-white">{{ __('You are logged in!') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</form>
</body>
</html>