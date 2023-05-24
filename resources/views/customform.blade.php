@extends('layout.custom')

@section('content')


<div class="flex-center position-ref full-height">
    <div class="content">
        <div>
            <p style='color:red'>This is my Form Page</p>
          <div>
            <img src="/images/pidex.png" alt="pidex" srcset="">
          </div>  
        </div>
        
       <form action="form-submit" method="post">
            @csrf
            <input type="text" name="name" placeholder="User Name">
            <input type="password" name="password" placeholder="Password">
            <input type="Submit" >
       </form>
    </div>


</div>
@endsection