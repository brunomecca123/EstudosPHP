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

                    <a class="text-white">  <tbody>
                    <table class="table">
  <thead>
    <tr>
      <th style="color:#FFFFFF" scope="col">#</th>
      <th style="color:#FFFFFF" scope="col">Primeiro</th>
      <th style="color:#FFFFFF" scope="col">Último</th>
      <th style="color:#FFFFFF" scope="col">Nickname</th>
    </tr>
    </div>
  </thead>
  <tbody>
    <tr>
      <th style="color:#FFFFFF" scope="row">1</th>
      <td style="color:#FFFFFF">Mark</td>
      <td style="color:#FFFFFF">Otto</td>
      <td style="color:#FFFFFF">@mdo</td>
    </tr>
    <tr>
      <th style="color:#FFFFFF" scope="row">2</th>
      <td style="color:#FFFFFF">Jacob</td>
      <td style="color:#FFFFFF">Thornton</td>
      <td style="color:#FFFFFF">@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
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