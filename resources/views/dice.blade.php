<!DOCTYPE html>
<html>
  <head>
    <title>Random Dice Roll</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dice.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favico2.png') }}">
  </head>
  <body>
    <div id="leftContent">
      <h1>Random Dice Roll</h1>
      <p class="average-text">average nuber is:</p>
      <div id="average"></div>
    </div>
      <div class="dice">
        <div class="side one"></div>
        <div class="side two"></div>
        <div class="side three"></div>
        <div class="side four"></div>
        <div class="side five"></div>
        <div class="side six"></div>
      </div>    
      <ul id="list"></ul>

      <script src="{{ asset('js/dice.js') }}"></script>
  </body>
</html>