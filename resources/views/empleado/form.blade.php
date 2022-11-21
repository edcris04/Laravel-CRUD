
    <h1>{{$modo }} Empleado</h1>
		@if(count($errors)>0)
		<div class="alert alert-danger" role="alert">
			<ul>
			@foreach($errors->all() as $error)
				
				<li>{{ $error }}</li>

			@endforeach
			</ul>
		</div>
		@endif

	<div class="mb-3">

		<label for="Nombre">Nombre:</label>
		<input type="text" class="form-control" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre"/>
	</div>
	<div class="mb-3">
		<label for="Nombre">ApellidoPaterno:</label>
		<input type="text" class="form-control" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno"/>
	</div>
	<div class="mb-3">
		<label for="ApellidoMaterno">Apellido Materno:</label>
		<input type="text" class="form-control" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}"  id="ApellidoMaterno"/>
	</div>
	<div class="mb-3">
		<label for="Correo">Correo:</label>
		<input type="text" class="form-control" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="Correo"/>
	</div>
	<div class="mb-3">
		<label for="Foto"></label>
		@if(isset($empleado->Foto))
		<img src="{{asset('storage').'/'.$empleado->Foto}}"   class="img-fluid img-thumbnail" width=200 alt="">
		@endif
		<input type="file" name="Foto" class="form-control" value="{{isset($empleado->Foto)?$empleado->Foto:old('Foto')}}" id="Foto"/> 
	</div>
	<input  type="submit" class="btn btn-success"  Value="{{$modo }} datos"/>
	<a href="{{url('empleado/')}}" class="btn btn-primary">Regresar</a>

	