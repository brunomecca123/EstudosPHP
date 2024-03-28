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
            <th style="color:#FFFFFF"> {{ $user->id }} </th>
            <td style="color:#FFFFFF">{{ $user->name }}</td>
            <td style="color:#FFFFFF">{{ $user->email }}</td>
          </tr>
          @endforeach
        </tbody></a>
      </div>
    </div>
  </div>
  
</div>
<div>
  <canvas id="myChart"></canvas>
</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  var user = "{{$userCount}}"
  const ctx = document.getElementById('myChart');
  
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label:'usuários',
        data: [user, 19, 3, 5, 2, 3],
        borderWidth: 5,
        backgroundColor: '#FFB1C1',
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</html>