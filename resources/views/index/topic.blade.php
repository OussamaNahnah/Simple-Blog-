@extends('index.master')
@section('content')
 @include('other.header')
 <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 margin" >
                <img src="  {{URL::asset('/img/'.$topic->img_url)}} " class="img-circle myimg" alt="cinque terre">
                <section>
                    <h1 class="center"> {{$topic->title}}</h1>
                  <center>  <p class="center large" > {{$topic->content}} </p></center>
                    
                </section>
            </div> 
         

        </div>

</div>

 @endsection