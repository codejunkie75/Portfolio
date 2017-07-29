@extends('layouts.app')
@section('content')

   <div id='parallaxin'>
        <div class="jumbotron" id="jumbotron">
            <h1 id="title">Welcome to my portfolio.</h1>
            <p id='bootstraptext'>I built this portfolio to demonstrate my skills and ability in web development. <br> Please look around.</p>
        </div>
    </div>
    <div id="container">
        <h1>Devin Walker helps run the show at Thought House and WordImpress.<br> He loves to code, has a knack for design, and has built many successful websites and applications.< He leads by doing in San Diego, California.</h1>
    </div>

    <div id='parallaxout'>
      <div id='indexlogo'>
        <div id='indexlogos' class="row">
        <div class="col-sm-6" id='indexpannels'>
             <img src="../images/PHP-logo.svg" alt="Smiley face" height="170" width="170"> 
        </div>
        <div class="col-sm-6" id='indexpannels'>
          <img src="../images/HTML5logo.svg" alt="Smiley face" height="170" width="170">     
        </div>
            <div class="col-sm-6" id='indexpannels'>
          <img src="../images/CSS3logo.svg" alt="Smiley face" height="170" width="170"> 
        </div>
        <div class="col-sm-6" id='indexpannels'>
           <img src="../images/MYSQLlogo.svg" alt="Smiley face" height="170" width="170"> 
        </div>
      </div>
      </div>
    </div>

@endsection



