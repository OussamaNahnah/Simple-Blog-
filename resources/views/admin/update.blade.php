@extends('index.master')
@section('content')
@include('other.header')

<h1 class="center">update Topic</h1>
<form  method="post" action="{{ route('admin.update_ok',[$topic->id ]) }}">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

<center><input class="large"   placeholder="Image URL of Topic" type="text" name="img" value="{{$topic->img_url}}"></br></center>
<center><input class="large"  placeholder="Name Of Topic:" type="text" name="title" value="{{$topic->title}}"> </br></center>
<center><input class="large"  placeholder="Content Of Topic:" type="text" name="content" value="{{$topic->content}}"></br></center>
<center><input class="large" type="submit" value="Save"></center>
</form>
@endsection