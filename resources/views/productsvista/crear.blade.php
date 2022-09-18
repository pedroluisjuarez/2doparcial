

@extends('Refactorizando.main') <!--directiva, ubicamos el arhivo padre a heredar -->
@section('contenidoinyectado') <!--directiva, se incrusta en la seccion padre (contenido inyectado) -->

      <div class="container"><br>
      <h6>Ruta desde views/productsiva/crear</h6>
            <div class="row">
                  <div class="col-md-12">
                        <div class="card">
                              <div class="card-header">
                                    CREAR PRODUCTO                                    
                              <div>
                              <div class="card-body">
                                    <form action="{{route('productsvista.aliasstore')}}" method='POST'> 
                                                  <!--helper (5) desde web.php -->
                                          @csrf <!--esta libreria trabaja con angular, generando un token para autenticidad de la informacion enviando (trabaja con .blade.php) -->
                                          
                                          <div class="form-group">
                                                <label for="">Descripciòn</label>
                                                <input type="text" class="form-control" name="description"> <!--nombre db -->
                                          </div>

                                          <div class="form-group">
                                                <label for="">Precio</label>
                                                <input type="number" class="form-control" name="price"> <!--nombre db -->
                                          </div>

                                          <button type="submit" class="btn btn-primary">Guardar</button> <!--con el boton de accionara el form action --> 
                                          <a href="{{route('productsvista.aliasindex')}}" class="btn btn-danger">Cancelar</a>
                                                   <!--helper (5) desde web.php -->

                                    </form>
                              </div>
                        <div>
                  <div>
            <div>
      <div>

@endsection <!--directiva donde finaliza, lo incrustado en la seccion padre (contenido inyectado) -->
  