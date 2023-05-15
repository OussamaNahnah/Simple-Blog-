@extends('index.master')
@section('content')

@include('other.header')
 



    <header class="bgimage"> Tobic Programming</header>
    @if(Session::has('created'))
    <div class="alert-wrap">
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <i class="fa fa-check"></i> <strong>Success!</strong> {{ Session::get('created')}}
</div></div>
@endif
@if(Session::has('updated'))
    <div class="alert-wrap">
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <i class="fa fa-check"></i> <strong>Success!</strong> {{ Session::get('updated')}}
</div></div>
@endif
@if(Session::has('deleted'))
    <div class="alert-wrap">
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <i class="fa fa-times"></i> <strong>Deleted</strong> {{ Session::get('deleted')}} 
</div></div>
@endif

<div class="container-fluid">
        <div class="row">
         
            @foreach($topics as $topic)
            <div class="col-sm-3 margin" >
                <img src="  {{URL::asset('/img/'.$topic->img_url)}} " class="img-circle myimg" alt="cinque terre">
                <section>
                    <h1 class="center"> {{$topic->title}}</h1>
                    <p class="center maxlength"> {{$topic->content}} </p>
                       <center> <a href="{{route('index.topic',[$topic->id ])}}">Read More...</a></center>
                </section>
            </div> 
            @endforeach

        </div>

</div>


   @endsection
