@extends('layout.custom')

@section('content')


<div class="flex-center position-ref full-height">
    <div class="content">
        <div>
            <p style='color:red'>This is my Home Page.</p>
            <div>
                <img src="/images/pidex.png" alt="pidex" srcset="">
            </div>
        </div>
        <div>
            <h2>Hello ! {{$username}}.Welcom to Pidex</h2>
            <h3>Your ID is {{$userid}}</h3>
            <h4>Your Age : {{$age}}</h4>
        </div>

        @foreach($products as $product)
        @if($product == 'Banana')
        <h1>{{$product}}</h1>
        @elseif($product=='Apple')
        <h1>{{$product}}</h1>
        @else
        <h1>This is neither Orange nor PineApple</h1>
        @endif
        @endforeach

        <!-- <h1>In an Abbriviation</h1>
                    @for($i = 0; $i < 3; $i++)
                        <h1>{{$products[$i]}}</h1>
                    @endfor -->

    </div>


</div>
@endsection