@extends('app')
@section('content')
<div class="container w-50 border p-4">
    
    <form action="{{  route('todos') }}" method="POST">
        <div class="mb-3">
          @csrf
          @if (session('success'))
          <h6 class="alert alert-success">{{ session('success') }}</h6>
          @endif
            
          @error('nrodefamilia')
          <h6 class="alert alert-danger">{{ $message }}</h6>
          @enderror
          @error('parroquia')
          <h6 class="alert alert-danger">{{ $message }}</h6>
          @enderror
          @error('eje')
          <h6 class="alert alert-danger">{{ $message }}</h6>
          @enderror
          @error('tipolap')
          <h6 class="alert alert-danger">{{ $message }}</h6>
          @enderror
          @error('comunidad')
          <h6 class="alert alert-danger">{{ $message }}</h6>
          @enderror
          @error('grupofam')
          <h6 class="alert alert-danger">{{ $message }}</h6>
          @enderror
          @error('nombreyapellido')
          <h6 class="alert alert-danger">{{ $message }}</h6>
          @enderror

          <label for="nrodefamilia" class="form-label">Nro de Familia</label>
          <input type="number" class="form-control" name="nrodefamilia" id="nrodefamilia">
         </div>
<div class="row ">
         <div class="col">
            <div class="mb-3">
          <label for="parroquia" class="form-label">Parroquia</label>
          <input type="text" class="form-control" name="parroquia" id="parroquia" value="Parroquia">
        </div>
        <div class="mb-3">
          <label for="eje" class="form-label">Eje</label>
          <input type="text" class="form-control" name="eje" id="eje" valuer="3">
        </div>
        <div class="mb-3">
          <label for="tipolap" class="form-label">Tipo Lap</label>
          <input type="text" class="form-control" name="tipolap" id="tipolap" value="Comunidad">
        </div>
        <div class="mb-3">
          <label for="comunidad" class="form-label">Nombre de Comunidad</label>
          <input type="text" class="form-control" name="comunidad" id="comunidad" value="Lap 1">
        </div>
        <div class="mb-3">
          <label for="grupofam" class="form-label">Grupo Familiar</label>
          <select name="grupofam" class="form-select form-select-sm" aria-label=".form-select-sm example">
             <option value="Hijo(a)">Hijo(a)</option>
            <option value="Concubino(a)">Concubino(a)</option>
            <option value="Esposo (a)">Esposo(a)</option>
            <option value="Nieto(a)">Nieto(a)</option>
            <option value="Sobrino(a)">Sobrino(a)</option>
            <option value="Esposo (a)">Esposo(a)</option>
            <option value="Nieto(a)">Nieto(a)</option>
            <option value="Hermano(a)">Hermano(a)</option>
            <option value="Abuelo(a)">Abuelo(a)</option>
            <option value="Bisnieto(a)">Bisnieto(a)</option>
            <option value="Cuñado(a)">Cuñado(a)</option>
             <option value="Madre">Madre</option>
            <option value="Padre">Padre</option>
            <option value="Nuera">Nuera</option>
            <option value="Yerno">Yerno</option>
            <option value="Suegro(a)">Suegro(a)</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="nombreyapellido" class="form-label">Nombre y Apellido</label>
          <input type="text" class="form-control" name="nombreyapellido" id="nombreyapellido">
        </div>

         </div>

         <div class="col">

        <div class="mb-3">
          <label for="cedula" class="form-label">Cedula</label>
          <input type="number" class="form-control" name="cedula" id="cedula">
        </div>
        <div class="mb-3">
          <label for="fechanac" class="form-label">Fecha de Nacimiento</label>
          <input type="text" class="form-control" name="fechanac" id="fechanac">
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="number" class="form-control" name="telefono" id="telefono">
        </div>
        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input type="text" class="form-control" name="direccion" id="direccion">
        </div>
       <div class="mb-3">
          <label for="email" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="serialcarnet" class="form-label">Serial </label>
          <input type="text" class="form-control" name="serialcarnet" id="serialcarnet">
        </div>
        <div class="mb-3">
          <label for="codigocarnet" class="form-label">Codigo </label>
          <input type="text" class="form-control" name="codigocarnet" id="codigocarnet">
        </div>
         <button type="submit" class="btn btn-primary">Insertar Registro</button>
          
      </form>
</div>
</div>
</div>

<div class="container">
<div class="row py-1">
  <div class="col d-flex align-items-center">
    Nro de Familia
  </div>
  <div class="col d-flex align-items-center">
    Parroquia
  </div>
  <div class="col d-flex align-items-center">
    Eje
  </div>
  <div class="col d-flex align-items-center">
    Tipo Lap
  </div>
  <div class="col d-flex align-items-center">
    Comunidad
  </div>
  <div class="col d-flex align-items-center">
    Grupo Familiar
  </div>
  <div class="col d-flex align-items-center">
    Nombre y Apellido
  </div>
  <div class="col d-flex align-items-center">
    Cedula
  </div>
  <div class="col d-flex align-items-center">
    Fecha de Nacimiento
  </div>
  <div class="col d-flex align-items-center">
    Telefono
  </div>
  <div class="col d-flex align-items-center">
    Direccion
  </div>
 <div class="col d-flex align-items-center">
    Correo Electronico
  </div>
  <div class="col d-flex align-items-center">
    Serial
  </div>
  <div class="col d-flex align-items-center">
    Codigo 
  </div>
  <div class="col d-flex align-items-center">
    Funcion
  </div>
</div>
<div class="row py-1"></div>
@foreach ($todos as $todo)


  <div class="row py-1" style="background-color: #e3f2fd;">
   <div class="col d-flex align-items-center text-nowrap small">
       <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->nrodefamilia }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->parroquia }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->eje }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->tipolap }}</a>
   </div>

   <div class="col d-flex align-items-center small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->comunidad }}</a>
   </div>

   <div class="col d-flex align-items-center small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->grupofamiliar }}</a>
   </div>

   <div class="col d-flex align-items-center text-capitalize small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->nombreyapellido }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->cedula }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->fechanac }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->telefono }}</a>
   </div>
   
   <div class="col d-flex align-items-center small">
    <small><a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->direccion }}</a></small>
   </div>

   <div class="col d-flex align-items-center small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->email }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->serialcarnet }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
    <a href="{{  route('todos-edit', ['id' => $todo->id])  }}">{{ $todo->codigocarnet }}</a>
   </div>

   <div class="col d-flex align-items-center text-nowrap small">
       <form action="{{ route('todos-destroy',[$todo->id])  }}" method="POST">
           @method('DELETE')
           @csrf
           <button class="btn btn-danger btn-sm">Eliminar</button>
       </form>
   </div>
  
  </div>
  <div class="row py-1"></div>

   
</div>
    
@endforeach
@endsection