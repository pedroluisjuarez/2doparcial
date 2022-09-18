

@extends('Refactorizando.main') <!--directiva, ubicamos el arhivo padre a heredar -->
@section('contenidoinyectado') <!--directiva, se incrusta en la seccion padre (contenido inyectado) -->


      <div class="container"><br>
      <h6>Ruta desde views/productsiva/index</h6>
            <div class="row">
                  <div class="col-md-12">
                        <div class="card">
                              <div class="card-header">
                                    LISTADO DESDE BASE DATOS
                                    <a href="{{route('productsvista.aliascrear')}}" class="btn btn-success btn-sm float-right">Nuevo estudiante</a>
                                             <!--helper (5) desde web.php -->
                              <div>
                              <div class="card-body">
                                    <!--(8) indentificamos si tenemos mensajes flash y lo mostramos (se trae el nombre)-->
                                    @if(session('informaccion'))
                                          <div class="alert alert-success"> <!--esta alerta solo se muestra una vez -->
                                          {{session('informaccion')}}
                                          </div>
                                    @endif
                                          <table class="table table-hover table-sm">
                                                <thead>
                                                      <th>Descripciòn</th>
                                                      <th>Precio</th>
                                                      <th>Acciòn</th>
                                                </thead>
                                                <tbody><!--aca se crearan todas las filas -->
                                                      @foreach($variable3 as $itereval4)      <!--directiva, blade de laravel -->
                                                      <tr>
                                                            <td>
                                                                  {{$itereval4->description}} <!--variable iterada apunta a campo de la base de datos -->
                                                            </td>
                                                                  
                                                            <td>
                                                                  {{$itereval4->price}} <!--variable iterada apunta a campo de la base de datos -->
                                                            </td>
                                                            <td>
                                                                  <a href="{{ route('productsvista.aliaseditar', $itereval4->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                                                  <a href="javascript: document.getElementById('delete-{{$itereval4->id}}').submit()" class="btn btn-danger">Eliminar</a><!--boton para eliminar -->
                                                                  <form id="delete-{{$itereval4->id}}" action="{{route('productsvista.aliasdestroy',$itereval4->id)}}" method="POST"> <!--form accion, helper llama a destroy -->
                                                                                                            <!-- ↑ variable iterada -->
                                                                  @method('delete') <!-- con esto el metodo post sabra que tiene que ir a buscar una ruta (delete) -->
                                                                  @csrf
                                                                  </form>
                                                            </td>
                                                      </tr>
                                                      @endforeach
                                                </tbody>

                                          </table>
                              </div>
            <div class="card-footer"> Bienvenido {{ auth()->user()->name }}  BIENVENIDA AL USUARIO
             <a href="javascript:document.getElementById('logout').submit()" class="btn btn-danger btn-sm float-right">Cerrar Sesion</a>
            <form action="{{ route('logout') }}" id="logout" style="display:none" method="post"></form>
            @csrf
            </div>
                        <div>
                  <div>
            <div>
      <div>

@endsection <!--directiva donde finaliza, lo incrustado en la seccion padre (contenido inyectado) -->

