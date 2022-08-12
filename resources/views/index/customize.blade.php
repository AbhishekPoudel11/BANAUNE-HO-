<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{asset('theme/customize/c-s-s/styles.css')}}">



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="{{asset('theme/customize/j-s/custom.js')}}"></script>
</head>

<body>
 

<!--------------------------------------------Personality--------------------------------- -->
  <div id="Personality"class="container">

<!-- LOGO -->

    <div class="row justify-content-center">
      <div class="col-md-2 top-margin-small">
        <img src="{{asset('theme/customize/img/logo.png')}}" alt="logo" id="logo-resize">
      </div>
    </div>

<!-- First Step (Enter Name) -->

    <div class="text-center" id="first-step">
      <h1>Personality Quiz</h1>
      <p class="lead">Hi {{ Auth::user()->name }}, Let's start with your name.</p>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form class="form-horizontal" role="form" id="nameForm">
            <div class="form-group">
              <input class="form-control" type="text" id="username" value="{{Auth::user()->name}}" placeholder="your name" required>
            </div>
            <input type="submit" class="btn btn-info btn-large" value="Submit"/>
          </form>
        </div>
      </div>
    </div>

<!-- Second Step (Choose Color of Shoe Base) -->

    <div class="text-center" id="second-step">
      <span id="insertname"></span>
      <br>
      <p class="lead"><br> How would you describe yourself?</p>
      <form class="" action="index.html" method="post" id="base-color-form">

        <br>
        <div class="row justify-content-center well">
            <div class="col-md-2 radio">
              <label>
                <input type="radio" name="base-color" value="white" checked>
                <br>Class
              </label>
            </div>
            <div class="col-md-2 radio">
              <label>
                <input type="radio" name="base-color" value="blue" >
                <br>Gentleman
              </label>
            </div>
            <div class="col-md-2 radio">
              <label>
                <input type="radio" name="base-color" value="black" >
                <br>Stealth
              </label>
            </div>
            <div class="col-md-2 radio">
              <label>
                <input type="radio" name="base-color" value="red" >
                <br>Passionate
              </label>
            </div>
        </div>
        <br><br>
        <input type="submit" class="btn btn-info btn-large" value="Submit"/>
      </form>
    </div>

<!-- Third Step (Show Shoe Selection) -->
<div class="text-center" id="third-step">
  <h1>You selected <span id="shoe-personality"></span>.</h1>
  <br>
  <p class="lead">Let's start with the base. How do you feel about a <span id="shoe-color-word"></span> shoe?</p>
  <br><br>

<!-- Four Shoe Color Options -->

    <div id="white-shoe">
      <img src="{{asset('theme/customize/img/shoes/white.png')}}" alt="white-shoe" class="resize-shoe" >
    </div>
    <div id="blue-shoe">
      <img src="{{asset('theme/customize/img/shoes/blue.png')}}" alt="blue-shoe" class="resize-shoe" >
    </div>
    <div id="black-shoe">
      <img src="{{asset('theme/customize/img/shoes/black.png')}}" alt="black-shoe" class="resize-shoe" >
    </div>
    <div id="red-shoe">
      <img src="{{asset('theme/customize/img/shoes/red.png')}}" alt="red-shoe" class="resize-shoe" >
    </div>
  <br>

<!-- Yes / No buttons -->

  <div class="row justify-content-center">
    <div class="col-md-3">
      <input class="btn btn-info btn-large" value="I Like It!" id="like-it"/>
    </div>
    <div class="col-md-3">
      <input class="btn btn-danger btn-large" value="Try again" id="try-again"/>
    </div>
  </div>

  </div>

<!-- Fourth Step (Fine Tune Customization) -->

    <div class="text-center" id="fourth-step">
      <span id="fourth-step-h1"></span>
      <p class="lead">I have just a few more questions for you.</p>
      <form action="submit" method="post" id="final-customization">
        <div class="row">
          <div class="col-md-3">
            <label for="location">My favorite fruit is:</label>
            <div class="selectWrapper">
              <select id="fruit">
                  <option value="red">Strawberry</option>
                  <option value="orange">Oranges</option>
                  <option value="yellow">Bananas</option>
              </select>
            </div>

          </div>
          <div class="col-md-3">
            <label for="location">Come find me:</label>
            <div class="selectWrapper">
              <select id="location">
                  <option value="black">Outdoors</option>
                  <option value="white">Indoors</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label for="location">Besties:</label>
            <div class="selectWrapper">
              <select id="friends">
                  <option value="white">Straightforward</option>
                  <option value="pink">Fun and Bubbly</option>
                  <option value="black and white">Exclusive</option>
              </select>
            </div>
          </div>
        <div class="col-md-3">
          <label for="location">Deep down I am:</label>
          <div class="selectWrapper">
            <select id="deepdown">
                <option value="white">Lighthearted</option>
                <option value="black and white">Adaptable</option>
                <option value="lime green">Unique</option>
                <option value="red">Aggressive</option>
            </select>
          </div>
        </div>
        </div>
        <br>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <input type="submit" class="btn btn-info btn-large" value="Submit!" id="submit-answers"/>
          </div>
        </div>
      </form>

    </div>

    <div class="text-center" id="fifth-step">
      <h1>Here you go, <span id="final-user-name"></span>.</h1>
      <p class="lead">This shoe would look great on you!</p>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card" style="width: 20rem;">
            <span id="final-featured-shoe"></span>
            <div class="card-block">
              <h4 class="card-title"><span id="final-user-name-h4"></span>'s Custom Shoe</h4>
              <p class="card-text">As you know, it will have a <span id="final-color"></span> color for the base.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-center">Your shoelaces will be &nbsp<span id="final-shoelaces"></span></li>
              <li class="list-group-item text-center">Your webbings will be &nbsp<span id="final-webbings"></span></li>
              <li class="list-group-item text-center">Your midsole will be &nbsp<span id="final-midsole"></span></li>
              <li class="list-group-item text-center">Your outsole will be &nbsp<span id="final-outsole"></span></li>
            </ul>
            <div class="card-block">
              <div class="row">
                <div class="col-md-6">
                  <a><button class="btn btn-info btn-large">Purchase</a>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-danger btn-large" id="startover">Start Over</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
      <br><br>
  </div>

</body>

</html>
