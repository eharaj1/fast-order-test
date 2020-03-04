@extends('base')

@section('contents')
		<div class="card">
			<div class="card-header">
				<h5>Show Episode</h5>
			</div>
			<div class="card-body">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead class="bg-light">
									<tr>
										<th>ID</th><th>Title</th><th>URL</th><th>Rating</th><th>Language</th><th>Schedule</th><th>Runtime</th>
									</tr>
								</thead>
								<tbody>
									@foreach($records as $record)
									<tr>
										<td>{{$record['show']['id']}}</td>
										<td>{{$record['show']['name']}}</td>
										<td>
											<a href="{{$record['show']['url']}}" target="_blank">
												{{$record['show']['url']}}
											</a></td>
										<td>{{$record['show']['rating']['average']}}</td>
										<td>{{$record['show']['language']}}</td>
										
										<td>{{$record['show']['schedule']['time']}}<br>
											{{implode(',', $record['show']['schedule']['days'])}}
										</td>
										<td>{{$record['show']['runtime']}}</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>



@endsection