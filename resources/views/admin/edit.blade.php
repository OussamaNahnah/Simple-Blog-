@extends('index.master')
@section('content')
@include('other.header')

<h1 class="center">Edit Topic</h1>
@foreach($topics as $topic)
            <div class="col-sm-3 margin" >
                <img src="  {{URL::asset('/img/'.$topic->img_url)}} " class="img-circle myimg" alt="cinque terre">
                <section>
                    <h1 class="center"> {{$topic->title}}</h1>
                    <p class="center maxlength"> {{$topic->content}} </p>
                    <center> <a href="{{route('admin.update',[$topic->id])}}">edit</a></center>
                </section>
            </div> 
            @endforeach

@endsection