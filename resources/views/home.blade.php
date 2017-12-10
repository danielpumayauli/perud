@extends('layouts.app')

@section('body-class', 'product-page')

@section('content')
<!-- <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div> -->

<div class="header header-filter" style="background-color: #46A760">

</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title  text-center">AQUAVIP</h2>

            @if(session('status'))

            <div class="alert alert-success">
                {{session('status')}}
            </div>

            @endif
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-md-6 alert alert-success text-center">
                    <a href="{{ url('/service/'.$category->id.'/index') }}">
                        <i class="material-icons">dashboard</i>
                        {{$category->name}}
                    </a>
                </div>
                
                @endforeach
            </div>
            

            <!-- <ul class="nav nav-pills nav-pills-primary" role="tablist">
                <li>
                    <a href="#dashboard" role="tab" data-toggle="tab">
                        <i class="material-icons">dashboard</i>
                        Carrito de compras
                    </a>
                </li>
                
                <li>
                    <a href="#tasks" role="tab" data-toggle="tab">
                        <i class="material-icons">list</i>
                        Pedidos realizados
                    </a>
                </li>
            </ul> -->


        </div>



    </div>

</div>

<!-- Incluir footer-->
@endsection
