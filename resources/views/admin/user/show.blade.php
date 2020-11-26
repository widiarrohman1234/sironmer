@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data user
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<h3>{{$user->username}}</h3>
							<hr>
							<p>Username : {{$user->username}} |
								Email : {{$user->email}}
							</p>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection