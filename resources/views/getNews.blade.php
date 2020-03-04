@extends('base')

@section('contents')
		<div class="card">
			<div class="card-header">
				<h5>Hacker News</h5>
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
										<th>ID</th><th>Title</th><th>URL</th><th>Comment Count</th><th>Score</th><th>Date</th><th>Commented By</th>
									</tr>
								</thead>
								<tbody>
									@foreach($records as $record)
									<tr>
										<td>{{$record['objectID']}}</td>
										<td>{{$record['title']}}</td>
										<td>{{$record['url']}}</td>
										<td>{{$record['num_comments']}}</td>
										<td>{{$record['points']}}</td>
										<td>{{$record['created_at']}}</td>
										<td>{{$record['author']}}</td>
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