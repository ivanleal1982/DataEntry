@extends('app')
@section('content')
<div class="container w-25 border p-4">
    
    <form action="{{ route('todos-update',['id' => $todo->id ]) }}" method="POST">
      @method('PATCH')  
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
          <input type="number" class="form-control" name="nrodefamilia" id="nrodefamilia" value="{{ $todo->nrodefamilia }}">
         </div>
            <div class="mb-3">
          <label for="parroquia" class="form-label">Parroquia</label>
          <input type="text" class="form-control" name="parroquia" id="parroquia" value="{{ $todo->parroquia }}">
        </div>
        <div class="mb-3">
          <label for="eje" class="form-label">Eje</label>
          <input type="text" class="form-control" name="eje" id="eje" value="{{ $todo->eje }}">
        </div>
        <div class="mb-3">
          <label for="tipolap" class="form-label">Tipo Lap</label>
          <input type="text" class="form-control" name="tipolap" id="tipolap" value="{{ $todo->tipolap }}">
        </div>
        <div class="mb-3">
          <label for="comunidad" class="form-label">Nombre de Comunidad</label>
          <input type="text" class="form-control" name="comunidad" id="comunidad" value="{{ $todo->comunidad }}">
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
          <input type="text" class="form-control" name="nombreyapellido" id="nombreyapellido" value="{{ $todo->nombreyapellido }}">
        </div>
        <div class="mb-3">
          <label for="cedula" class="form-label">Cedula</label>
          <input type="number" class="form-control" name="cedula" id="cedula" value="{{ $todo->cedula }}">
        </div>
        <div class="mb-3">
          <label for="fechanac" class="form-label">Fecha de Nacimiento</label>
          <input type="text" class="form-control" name="fechanac" id="fechanac" value="{{ $todo->fechanac }}">
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="number" class="form-control" name="telefono" id="telefono" value="{{ $todo->telefono }}">
        </div>
        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $todo->direccion }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" name="email" id="email" value="{{ $todo->email }}">
        </div>
        <div class="mb-3">
          <label for="serialcarnet" class="form-label">Serial </label>
          <input type="text" class="form-control" name="serialcarnet" id="serialcarnet" value="{{ $todo->serialcarnet }}">
        </div>
        <div class="mb-3">
          <label for="codigocarnet" class="form-label">Codigo </label>
          <input type="text" class="form-control" name="codigocarnet" id="codigocarnet" value="{{ $todo->codigocarnet }}">
        </div>
         <button type="submit" class="btn btn-primary">Editar Registro</button>
          
      </form>
      
</div>
@endsection