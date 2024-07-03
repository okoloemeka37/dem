<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

</head>
<body>

    <header>
<h2>DashBoard</h2>

  </header>

  @extends('all.sideNav')

  @section('con')

  @endsection

  <section>
    <p class="cu" name="Dashboard"></p>



    <div class="dashboard-summary">
      <div class="summary-box">
        <h3>Downloads</h3>
        <p>0</p>
      </div>

      <div class="summary-box">
        <h3>Posts</h3>
        <p> {{$post}}</p>
      </div>

      <div class="summary-box">
        <h3>Books</h3>
        <p>{{$book}}</p>
      </div>
    </div>


  </section>

</body>
</html>
