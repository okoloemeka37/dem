<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip= $_SERVER['HTTP_CLIENT_IP'];
        }
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip= $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else if (!empty($_SERVER['HTTP_X_REAL_IP'])){
            $ip= $_SERVER['HTTP_X_REAL_IP'];
        } else {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        $ip='102.88.82.153';

        $ip_data=@json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));


$currency=$ip_data->geoplugin_currencyCode;

?>
<script defer>

function change(price,dom) {

    let id="93be5a7561d547409152e8cc5ff50773";
let country=document.querySelector(".cur").getAttribute('type');


    const options = {method: 'GET', headers: {accept: 'application/json'}};
fetch(`https://openexchangerates.org/api/latest.json?app_id=${id}`, options)
  .then(response => response.json())
  .then(response =>{

    let rate=response['rates'][country];

    let change=Math.ceil(Number(price)*rate);
    let id="#"+"book"+Number(dom).toString();

    document.querySelector(id).innerHTML=country+" "+change;



  })
  .catch(err => console.error(err));
}
</script>

@extends('../layouts.head')

@section('title') BookLib @endsection

@vite( ['resources/js/app.js'])

    </head>
@extends('../layouts.Nav')


@section('content')


{{--search bar result--}}


<p class="cs">  @csrf</p>

<div id="search-results">

</div>



<p class="cur" type={{$currency}}></p>


<div class="hold">
<div class="flat fade" style="background-image:url({{ URL::asset('images/front.jpg') }})">

    <div class="writes td">
        <p class="tg ">Science Fiction</p>
        <h1 class="ht">The History <br> Of Niguaragua</h1>
        <li class="sb bg-red f"><a href="">Browse More</a></li>
    </div>

</div>

<div class="flat fade " style="background-image:url({{ URL::asset('images/f.jpg') }})">

    <div class="writes td">
        <p class="tg ">Science Fiction</p>
        <h1 class="ht">The History <br> Of Niguaragua</h1>
        <li class="sb bg-red f"><a href="">Browse More</a></li>
    </div>

</div>
<div class="flat fade" style="background-image:url({{ URL::asset('images/f2.jpg') }})">

    <div class="writes td">
        <p class="tg ">Science Fiction</p>
        <h1 class="ht">The History <br> Of Niguaragua</h1>
        <li class="sb bg-red f"><a href="">Browse More</a></li>
    </div>

</div>
</div>


<div class="mor">
    <h2 class="hd">Recent Blog Post</h2>
    <i class="fa-solid fa-angle-left"  id="minus"></i>

    <i class="fa-solid fa-angle-right"id="plus"></i>

    <div class="gr ">
</div>

@foreach($posts as $post)
<?php $image="postImages/".$post['image'] ?>
<div class="tm">
<a href="{{route('indPost',$post['id'])}}">
                <img src="{{ URL::asset($image) }}" alt="">
                <div class="net">
                        <h1 class="title">{{$post['title']}}</h1>
                        <p class="author">{{$post['author']}}</p>
                        <div class="etc" style="display:flex; justify-content:space-between;"><p>{{$post['num_comments']}}<i class="fa-solid fa-comments"></i></p>
                          <p>{{$post['views']}}<i class="fa-solid fa-eye"></i></p>
                          </div>

                </div>

            </a>
</div>

@endforeach


</div>

<div class="tw">
    <div class="fv">
        <h1 class="ft">Featured This Week </h1>

        <div class="ftw">

            <div class="sf">
                <img src="{{ URL::asset('images/im.jpg') }}" alt="">
                <div class="nt">
                    <h1 class="title">The Barrons Betrayal</h1>
                    <p class="author"> by E.O Zyler</p>
                    <p class="pt">$g50</p>
                    <p class="revies">(<span>120</span> reviews)</p>
                  <p ><a href=""class="sd">View Details</a>  </p>
                </div>

            </div>

            <div class="sf">
                <img src="{{ URL::asset('images/im.jpg') }}" alt="">
                <div class="nt">
                    <h1 class="title">The Betrayal</h1>
                    <p class="author"> by E.O Zyler</p>
                    <p class="pt">$g50</p>
                    <p class="revies">(<span>120</span> reviews)</p>
                  <p ><a href=""class="sd">View Details</a>  </p>
                </div>

            </div>

            <div class="sf">
                <img src="{{ URL::asset('images/im.jpg') }}" alt="">
                <div class="nt">
                    <h1 class="title">The Barrons Wars</h1>
                    <p class="author"> by E.O Zyler</p>
                    <p class="pt">$g50</p>
                    <p class="revies">(<span>120</span> reviews)</p>
                  <p ><a href=""class="sd">View Details</a>  </p>
                </div>

            </div>

        </div>


    </div>

    <div class="di">
        <div >
    <img class="fl" src="{{ URL::asset('images/penny.jpg') }}" alt="">
            <div class="up">
                <p class="ts ">Science Fiction</p>
                <small class="h">The History <br> Of Penny Wise</small>

            </div>

        </div>
    </div>
</div>


<div class="lpi">
    <div class="df">

        <p class="tf now"><a class="ta" href="{{route('gen','null')}}">All</a></p>
        <p class="tf"><a class="ta" href="{{route('gen','Poetry')}}">Poetry</a></p>
       <p class="tf"><a class="ta" href="{{route('gen','Nonfiction')}}">Nonfiction</a></p>
       <p class="tf"><a class="ta" href="{{route('gen','Drama')}}">Drama</a></p>
        <p class="tf"><a class="ta" href="{{route('gen','Romance')}}">Romance</a></p>
        <p class="tf"><a class="ta" href="{{route('gen','Mystery')}}">Mystery</a></p>
        <p class="tf"><a class="ta" href="{{route('gen','Thriller')}}">Thriller</a></p>
        <p class="tf"><a class="ta" href="{{route('gen','Fiction')}}">Fiction</a></p>
        <p class="tf"><a class="ta" href="{{route('gen','Fantacies')}}">Fantacies</a></p>
        <p class="tf"><a class="ta" href="{{route('gen','Horror')}}">Horror</a></p>
        <p class="tf"><a class="ta" href="{{route('gen','History')}}">History</a></p>

    </div>

    <div class="book-flex">

        @foreach ($books as $book )
        <?php $image="BookImages/".$book['image'] ?>

        <div class="book-entry bookies">
<a href="{{route('sin',$book['id'])}}">
          <img class="book-image" src="{{ URL::asset($image) }}" alt="Book Image 1">
          <div class="book-info">
            <h3 class="title">{{$book['title']}}</h3>
             <p>{{$book['genre']}}</p>
            <p class="author">{{$book['author']}} (<span>Uploaded by <a href="{{route('sortAuth',$book->user_id)}}" style="color: red;" > {{$book['title']}}</a></span>)</p>

        </div>
<p class="price">Price:<span style=" color:skyblue" id="book{{ $book['id'] }}">
     @if($book->price =='')  Free Download
     @else  <script>change({{$book['price']}},{{$book['id']}})</script>
     </span> @endif</p>
    </a>
        </div>

        @endforeach



      </div>
      <div class="pagination">
        <span class="page-links">
            {!! $books->links('vendor.pagination.default') !!}
        </span>
    </div>
</div>







<div class="pg-footer">
    <footer class="footer">
      <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
        <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
      </svg>
      <div class="footer-content">
        <div class="footer-content-column">
          <div class="footer-logo">
            <a class="footer-logo-link" href="#">
              <span class="hidden-link-text">Zyler.com</span>
              <h1>LOGO</h1>
            </a>
          </div>

        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Company</h2>
            <ul id="menu-company" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Contact</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                <a href="#">News</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Careers</a>
              </li>
            </ul>
          </div>

        </div>

        <div class="footer-content-column">
          <div class="footer-call-to-action">
            <h2 class="footer-call-to-action-title"> Let's Chat</h2>
            <p class="footer-call-to-action-description"> Have a support question?</p>
            <a class="footer-call-to-action-button button" href="#" target="_self"> Get in Touch </a>
          </div>
          <div class="footer-call-to-action">
            <h2 class="footer-call-to-action-title"> You Call Us</h2>
            <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link" href="tel:09017251972" target="_self"> 09017251972 </a></p>
          </div>
        </div>
        <div class="footer-social-links"> <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
            <path class="footer-social-amoeba-path" d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z"></path>
          </svg>
          <a class="footer-social-link linkedin" href="https://www.linkedin.com/in/okolo-emeka-402295254/"" target="_blank">
            <span class="hidden-link-text">Linkedin</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 30 30">
              <path class="footer-social-icon-path" d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z"></path>
            </svg>
          </a>
          <a class="footer-social-link twitter" href="https://x.com/zylercodes?t=wb2Ah1UrbAUgYASqkIwZsQ&s=09&mx=2" target="_blank">
            <span class="hidden-link-text">Twitter</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
              <path class="footer-social-icon-path" d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219 "></path>
            </svg>
          </a>
          
          <a class="footer-social-link github" href="https://github.com/okoloemeka37" target="_blank">
            <span class="hidden-link-text">Github</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path class="footer-social-icon-path" d="M 16 4 C 9.371094 4 4 9.371094 4 16 C 4 21.300781 7.4375 25.800781 12.207031 27.386719 C 12.808594 27.496094 13.027344 27.128906 13.027344 26.808594 C 13.027344 26.523438 13.015625 25.769531 13.011719 24.769531 C 9.671875 25.492188 8.96875 23.160156 8.96875 23.160156 C 8.421875 21.773438 7.636719 21.402344 7.636719 21.402344 C 6.546875 20.660156 7.71875 20.675781 7.71875 20.675781 C 8.921875 20.761719 9.554688 21.910156 9.554688 21.910156 C 10.625 23.746094 12.363281 23.214844 13.046875 22.910156 C 13.15625 22.132813 13.46875 21.605469 13.808594 21.304688 C 11.144531 21.003906 8.34375 19.972656 8.34375 15.375 C 8.34375 14.0625 8.8125 12.992188 9.578125 12.152344 C 9.457031 11.851563 9.042969 10.628906 9.695313 8.976563 C 9.695313 8.976563 10.703125 8.65625 12.996094 10.207031 C 13.953125 9.941406 14.980469 9.808594 16 9.804688 C 17.019531 9.808594 18.046875 9.941406 19.003906 10.207031 C 21.296875 8.65625 22.300781 8.976563 22.300781 8.976563 C 22.957031 10.628906 22.546875 11.851563 22.421875 12.152344 C 23.191406 12.992188 23.652344 14.0625 23.652344 15.375 C 23.652344 19.984375 20.847656 20.996094 18.175781 21.296875 C 18.605469 21.664063 18.988281 22.398438 18.988281 23.515625 C 18.988281 25.121094 18.976563 26.414063 18.976563 26.808594 C 18.976563 27.128906 19.191406 27.503906 19.800781 27.386719 C 24.566406 25.796875 28 21.300781 28 16 C 28 9.371094 22.628906 4 16 4 Z "></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-wrapper">
          <p class="footer-copyright-text">
            <a class="footer-copyright-link" href="#" target="_self"> {{date('Y')}} | Zyler |All rights reserved. </a>
          </p>
        </div>
      </div>
    </footer>
  </div>

@endsection

<script defer>
    let current="{{$type}}"
   let ta=document.querySelectorAll(".ta")

   ta.forEach(el => {
    el.parentElement.classList.remove('now')
    if (el.innerHTML===current) {
        el.parentElement.classList.add('now')
    }
   });

</script>
</body>
</html>
