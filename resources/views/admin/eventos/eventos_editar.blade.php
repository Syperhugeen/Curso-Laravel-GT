@extends('layouts.admin_layout.admin_layout')

@section('content')

<div class="admin-contnedor-navegacion-miga">
  {{-- home --}}
  <a href="{{route('get_admin_home')}}"><span class="icon-home"></span></a>

  {{-- separador --}}
  <span class="spam-separador">|</span> 

  {{-- lugar atras --}}
  <a href="{{route('get_admin_eventos')}}"><span>Eventos</span></a>

  {{-- separador --}}
  <span class="spam-separador">|</span> 

  {{-- lugar donde esta --}}
  <span>Editar evento: {{$Evento->name}}</span>
</div>

<div class="contenedor-admin-entidad">

 <div class="contenedor-img-titulo">
   <img class="admin-entidad-img" src="{{$Evento->url_img}}">
   {{-- titulo --}}
   <div class="admin-entidad-titulo">Editar Evento {{$Evento->name}}</div>
 </div>
 
   
 

 </div>
 

 {{-- formulario --}}
  {!! Form::model($Evento,   ['route' => ['set_admin_eventos_editar',$Evento->id],
                            'method'=> 'patch',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}




   <div class="formulario-contenedor">


    {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
         @include('admin.eventos.formularios_partes.datos_basicos')

         {{-- fecha del evento --}}
         <div class="formulario-label-fiel">
          {!! Form::label('fecha', 'Fecha', array('class' => 'formulario-label ')) !!}
          {!! Form::date('fecha',\Carbon\Carbon::parse($Evento->fecha)) !!}
          
        </div>

         <div class="formulario-label-fiel">
            {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
            {!! Form::select('estado',['si' => 'Activo',
                                       'no' => 'Inactivo'] , null )          !!}
         </div>
        </div>
      </div>

      {{-- datos imagenes --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Marcas asociadas</div>
        <div class="contenedor-formulario-label-fiel">     
          @include('admin.eventos.partes.parte_de_marcas')                    
          @include('admin.eventos.formularios_partes.datos_marcas')
        </div>
      </div>


      {{-- datos imagenes --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Imágenes</div>
        <div class="contenedor-formulario-label-fiel"> 
          @include('admin.eventos.partes.parte_imagenes_adicionales')                      
          @include('admin.eventos.formularios_partes.datos_imagenes')
        </div>
      </div>
   </div>
   {!! Form::hidden('tipo_de_boton','hola') !!}
   
   <div class="Helper-OrdenarHijos-columna get_width_100" >
      <dir class="Helper-OrdenarHijos-Row">
         <div class="boton-formato editar-evento-guardar">
           Guardar
         </div> 

         <div style="padding: 20px;"></div>

         <div class="boton-formato editar-evento-guardar-y-salir">
           Guardar y salir
         </div> 
     </dir>
   </div>
   
   <a href="{{route('EliminarUnEvento', $Evento->id)}}">Eliminar este evento</a>


  {!! Form::close() !!} 


  
</div>
  
@stop