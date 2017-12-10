@extends('layouts.app')

@section('title', 'Dashboard')

@section('body-class', '')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            

            @if(session('status'))

            <div class="alert alert-success">
                {{session('status')}}
            </div>

            @endif

            @if($id == 1)
            <h2 class="title  text-center">PREPARA TU DUCHA</h2>
            <h3 class="text-center" >ELIGE TU OPCIÓN FAVORITA</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nombre</th>
                        <th>Artista</th>
                        <th class="text-right">Acción</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($songs as $song)
                    <tr>
                        <td class="text-center">{{$song->id}}</td>
                        <td>{{$song->name}}</td>
                        <td>{{$song->artist}}</td>
                        <td class="td-actions text-right">
                            <!-- <audio src="{{ $song->path}}" controls><source src="" type="audio/mpeg" autoplay></audio> -->
                             <!-- Button trigger modal -->
                            <a href="{{ url('/service/'.$id.'/'.$song->id.'/play') }}" class="btn btn-primary">
                              ELEGIR
                            </a>
                        

                            
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>





            

            <!-- <div class="links">
                

                <ul class="nav nav-pills nav-pills-primary" role="tablist">
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
                </ul>

                <div id="dashboard">
                    item 1
                    
                </div>
                <div id="tasks">
                    item 2
                    
                </div>

            </div> -->
            @else
            <div class="title m-b-md" style="color: yellow; font-size: 5em">
                VUELVE PRONTO...
            </div>
            @endif







            


        </div>



    </div>

</div>

@endsection