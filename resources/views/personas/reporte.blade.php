<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Personas - YUNIOR SYSTEM</title>
	 <style>
	 body{
	 	font-family:arial;
	 }

	 h4{
		padding-top: 5px;
		padding-bottom: 5px;
	 }

	 .bg-dark {
  		background-color: #000 !important;
	 }
	 .text-white{
	 	color: #fff !important;
	 }

	 .text-center {
 		 text-align: center !important;
	}

	.table {
    	border-collapse: collapse !important;
  	}

    .table {
  		width: 100%;
  		margin-bottom: 1rem;
  		color: #212529;
  		font-size:12px;
	}

	.table th,
	.table td {
	  padding: 0.75rem;
	  vertical-align: top;
	  border-top: 1px solid #dee2e6;
	}

	.table thead th {
	  vertical-align: bottom;
	  border-bottom: 2px solid #dee2e6;
	}

	.table tbody + tbody {
	  border-top: 2px solid #dee2e6;
	}


	  .table td,
	  .table th {
	    background-color: #fff !important;
	  }

	  .table-bordered th,
	  .table-bordered td {
	    border: 1px solid #000 !important;
	  }

	tr:nth-child(even) {
  		background-color: #f2f2f2
	}
</style>
</head>
<body>
    <div class="row m-0">
	    <div class="col-lg-12 text-center">
	        <img src="{{ public_path().'/images/logo.png' }}" alt="Logo" height="80px" width="80px">
	    </div>
	</div>
	
	<h3 class="text-center text-white bg-dark">REPORTE DE PERSONAS</h3>

	<table class="table table-bordered" id="table-striped">
		<thead class="text-center">
			<tr>
				<th class="text-center"> # </th>
				<th class="text-center"> Cédula</th>
				<th class="text-center"> Nombre </th>
				<th clas="text-center"> Correo </th>
				<th class="cargo"> Cargo </th>
				
			</tr>
		</thead>

		<tbody class="text-center">
			@foreach($personas as $persona)
			<tr>
				<td><b>{{ $persona->id }}</b></td>
                <td>{{ $persona->cedula }}</td>
                <td>{{ $persona->nombre }}</td>
                <td>@if($persona->cargo_id) 
                       {{ $persona->cargo->nombre}}
                    @else 
                        Ninguno
                    @endif 
                </td>
                <td>{{ $persona->correo }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>