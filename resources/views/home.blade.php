<!DOCTYPE html>
<html>
<head>
  <title>Joris Boschmans</title>
  <link rel="stylesheet" type="text/css" href="https://bootswatch.com/flatly/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
  <script src="{{ URL::asset('js/script.js') }}"></script>
</head>
<body>
  <nav id="nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Joris Boschmans</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active smooth"><a href="#home">Home</a></li>
        <li class="smooth"><a href="#hobbies">Hobbies</a></li>
        <li class="smooth"><a href="#education">Education</a></li>
        <li class="smooth"><a href="#skills">Skills</a></li>
        <li class="smooth"><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div class="body-top-margin"></div>
  <div class="container">
    <div id="page1">
      <a id="home" class="smooth"></a>
      Home Content.
    </div>
    <div id="page2">
      <a id="hobbies" class="smooth"></a>
      Hobbies Content.
    </div>
    <div id="page3">
      <a id="education" class="smooth"></a>
      Education Content.
    </div>
    <div id="page4">
      <a id="skills" class="smooth"></a>
      Skills Content.
    </div>
    <div id="page5">
      <a id="contact" class="smooth"></a>
      Contact Content.
    </div>
  </div>
</body>
</html>
