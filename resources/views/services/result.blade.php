@extends('layouts.app')

@section('title', 'Dashboard')

@section('body-class', '')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised" style="background-color: #3FA458">
    <div class="container">

        <div class="section">
            

            @if(session('status'))

            <div class="alert alert-success">
                {{session('status')}}
            </div>

            @endif

            <h2 class="title  text-center" style="color: white">TU TIEMPO PARA BAÑARTE!</h2>
            
            <div class="text-center">
                <div class="crono_wrapper" style="margin: 0 auto">
                    <h2 id='crono'>00:00:00</h2>
                </div>

                <img src="{{url('/img/spotify.png')}}" style="display: inline-block; padding-bottom: 10px" alt="">
                <h3 class="text-center" style="color: white; display: inline-block;"> RESULTADO: {{ $service->duration }} </h3>
                <a href="{{ url('/home') }}" class="btn btn-success">Volver</a>
                
                
                <hr>
            </div>
            

            <div class="row">
                <div class="col-md-12" style="background-color: #272822">
                    <span>texto</span>
                </div>
            </div>

            <!-- Animacion de olas
            <div class="row">
                <div class="col-md-12" style="background-color: red">
                    <div class="app">
                      <div class="water">24</div>
                    </div>
                </div>
            </div>
            -->
            <style>
                @keyframes spin{
                  from {
                    transform: rotate(0deg);
                  }

                  to {
                    transform: rotate(360deg);
                  }
                }

                .water {
                      position: absolute;
                      background-color:#00E8FF;
                      z-index: 1;
                      width: 800px;
                      height: 800px;
                  

                      transform: translateZ(0);
                      -webkit-transform: translateZ(0);

                      transition: all 0.5s ease !important;
                      -webkit-transition: all 0.5s ease !important;

                      top: 50%;
                      left: -50%;
                      border: 1px solid transparent;
                      border-radius: 40% !important;
                       
                  animation-name: spin;
                       animation-duration: 8s;
                       animation-iteration-count: infinite;
                       animation-timing-function: linear;
                    }
            </style>

            <script>
                $('.water').css('width', $('body').width()*2);
                $('.water').css('height', $('body').width()*2);

            </script>

        </div>

    </div>

</div>
@endsection