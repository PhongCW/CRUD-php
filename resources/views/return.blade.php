<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Merriweather:300,700);
@import url(https://fonts.googleapis.com/css?family=Merriweather+Sans:300,700);

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    box-sizing: border-box; 
}

html, body {
    background:#2C343B;
    font-family: 'Merriweather', serif;
    color:#efefef;
    font-weight:300;
    font-size:1em;
    line-height:1.5;
}
a, a:visited {
  color:#FF5C55;
  
}
.wrapper {
    width:960px;
    margin:1em auto;
    padding:2em 3em;
    background:#52616D;
    text-align:center;
    border:2px solid #6D8191;
}
h1 {
    font-family: 'Merriweather Sans', sans-serif;
}
p {
  margin-bottom:2em;
}
button {
  padding:0.4em 0.8em;
  font-size:1.1em;
  border-radius:25px;
  font-family: 'Merriweather Sans', sans-serif;
  color:#fff;
  font-weight:300;
  background:#6D8191;
  box-shadow:none;
  border:1px solid #90AABF;
  cursor:pointer;
}
#test-1{
    box-shadow: 10px 10px 10px 0px rgba(0, 0, 0, 30);
}

#test-2{
    box-shadow: 10px 10px 10px 0px rgba(0, 0, 0, 30);
}

#test-3{
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 30);
}

#test-1:hover{
    background-color: black;
    color: white;
}
#test-2:hover{
    background-color: black;
    color: white;
}
#test-3:hover{
    background-color: black;
    color: white;
}
    </style>
</head>
<body>
<div class="wrapper">
  <h1>Choose Option!!!</h1>
  <p>
    <button id="test-1"><a href="{{route('first')}}">Click to go back</a></button>
    <button id="test-2"><a href="{{route('show')}}">Click to show all</a></button>
    <button id="test-3"><a href="{{route('login')}}">Click to Login</a></button>

<p>&nbsp;</p>
  
</div>
</body>
</html>