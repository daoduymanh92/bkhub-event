@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Danh sách tin nhắn học viên</div>

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
				 	<th>Message</th> 
		 		</tr> 
			</thead> 
		 	<tbody> 
		 		@foreach($questions as $key =>  $question)
			 	<tr> 
			 		<th scope="row">{{ ++$key }}</th> 
			 		<td>{{ $question->name }}</td> 
			 		<td>{{ $question->phone }}</td> 
			 		<td>{{ $question->email }}</td> 
			 		<td>{{ $question->message }}</td> 
			 	</tr>
			 	@endforeach
		 	</tbody> 
		</table>
    </div>
</div>
@endsection
