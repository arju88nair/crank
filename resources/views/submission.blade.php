@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">       
       <br>
        @if(isset($challenges))    
        @foreach($challenges as $challenge)
      <div class="list-group">
        <a href="{{route('submission_details',['cid'=>$challenge->challenge_id,'sid'=>$challenge->id])}}" class="list-group-item list-group-item-action flex-column align-items-start  user-access">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><span style="color:black"><h3>{{$challenge->cname}}</h3><span></h5>
          <small>{{$challenge->parsedTime}}</small>
      </div>
    <p class="mb-1 text-center"><span style="color:blue">{{$challenge->desc}}Lorem ipsum dolor sit amet, consectetur aia deserunt mollit anim id est laborum.</span></p>
    <small>Created by : {{$challenge->name}}</small>
      <div class="d-flex justify-content-end ">
        @if($challenge->status=='Approved')
        <i class="fas fa-check" style="
                              color: lightgreen;
                              "></i>
        @elseif($challenge->status=='Rejected')
        <i class="fas fa-close" style="
                              color:red;
                              "></i>
        @else
        <i class="fas fa-exclamation" style="
                              color:orange;
                              "></i>
        @endif
</div>
</a>
</div>
    <br>  
        @endforeach
      @else
      <strong> No Submissions</strong>
      @endif
  </div>
</div>
@endsection