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
        <h3><a href="{{route('Authorbook')}}">Books</a></h3>
        <p>{{$book}}</p>
      </div>
      <div class="summary-box">
        <h3> <a class="non" href="{{route('AuthorPost')}}">Posts</a></h3>
        <p> {{$post}}</p>
      </div>

      <div class="summary-box">
        <h3> <a href="{{route('notice')}}">Notification</a></h3>
        <p>{{count($note)}}</p>
      </div>
    </div>


    <div class="llp">
        <h1 class="d">Activities</h1>

        @foreach($note as $tr)

        <div class="Dasnotification success">
          @if ($tr->for_text =="posts")
          <p><a href="{{route('indPost',$tr->item_id)}}">{{$tr->description}} Your {{$tr->for_text}}</p></a>
          @else
          <p><a href="{{route('sin',$tr->item_id)}}">{{$tr->description}} Your {{$tr->for_text}}</p></a>
          @endif
            <span class="close-btn" id="{{$tr->id}}" >&times;</span>
        </div>
        @endforeach
    </div>
  </section>

  <script>
    let brn =document.querySelectorAll(".close-btn")
    brn.forEach(bus => {
    bus.addEventListener("click",()=>{
        let id=bus.id;
            console.log("jello");

            bus.parentElement.remove();
            fetch(`/check/${id}`,{
                method:"GET",
                headers:{
            'Content-Type':'application/json',
            "_token": "{{csrf_token()}}",
        },
            })

        })
    });

  </script>
</body>
</html>
