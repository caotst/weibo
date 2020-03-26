<!DOCTYPE html>
<html>
 <head>
 <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
 <link rel="stylesheet" href="{{ mix('css/app.css') }}">
 </head>
 <body>
<input type="button" value='sdf' id= 'ssd'>
<p id='ds'>sdfsdf</p>
<form  method="post" action=''>
  <input type="text" name="fname" required="required">
  <input type="submit" value="提交">
</form>
<script>





</script>




 @include('layouts._header')
 <div class="container">
 <div class="offset-md-1 col-md-10">
 @yield('content')
 @include('layouts._footer')
 </div>
 </div>
 </body>
</html>
