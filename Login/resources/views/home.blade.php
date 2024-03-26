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

          <a class="text-white">
            <tbody>
              <table class="table">
                <thead>
                  <tr>
                    <th style="color:#FFFFFF" scope="col">ID</th>
                    <th style="color:#FFFFFF" scope="col">Nome</th>
                    <th style="color:#FFFFFF" scope="col">Email</th>

                  </tr>
        </div>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <th style="color:#FFFFFF" scope="row"> {{ $user->id }} </th>
            <td style="color:#FFFFFF">{{ $user->name }}</td>
            <td style="color:#FFFFFF">{{ $user->email }}</td>
          </tr>
          @endforeach
        </tbody>
        </table>
        </tbody></a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
</form>
</body>

</html>