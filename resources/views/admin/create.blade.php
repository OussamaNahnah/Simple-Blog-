@extends('index.master')
@section('content')
@include('other.header')

<h1 class="center">Create Topic</h1>

<form  method="post" action="{{route('admin.insert')}}">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<center><input class="large"   placeholder="Image URL of Topic" type="text" name="img"></br></center>
<center><input class="large"  placeholder="Name Of Topic:" type="text" name="title"></br></center>
<center><input class="large"  placeholder="Content Of Topic:" type="text" name="content"></br></center>
<center><input class="large" type="submit" value="Save"></center>
</form>
<!--
a href="{{route('index.topics')}}"></a>

    <form method="post" action="">
<label>Name Of Topic:</label><input type="text"></br>
<label>Content Of Topic:</label><input type = "text"></br>
<label></label><a href="{{route('index.topics')}}"><input type="submit" value="Save"></a>
</form>
-->
@endsection