@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Danh sách đặt chỗ sự kiện</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

		<table class="table table-hover">
		 	<thead>
			 	<tr> 
				 	<th>#</th> 
				 	<th>Name</th> 
				 	<th>Phone</th> 
				 	<th>Email</th> 
		 		</tr> 
			</thead> 
		 	<tbody> 
		 		@foreach($books as $key =>  $book)
			 	<tr> 
			 		<th scope="row">{{ ++$key }}</th> 
			 		<td>{{ $book->name }}</td> 
			 		<td>{{ $book->phone }}</td> 
			 		<td>{{ $book->email }}</td> 
			 	</tr>
			 	@endforeach
		 	</tbody> 
		</table>
    </div>
</div>
@endsection
