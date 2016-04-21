@extends( 'template' )

@section( 'content' )
	<div class="content">
		<h1>Requests</h1>
		<table border="2" width="100%" cellpading="4" cellspacing="3">
			<tr>
				<th colspan="5"><h1 class="pageHeader">Rentals</h1></th>
			</tr>
			<tr align="center">
				<th>Type</th>
				<th>Brand</th>
				<th>Rent</th>
				<th>Return</th>
				<th>Actions</th>
			</tr>
			<tr align="center">
				<td>Voice Recorder</td>
				<td>Sony</td>
				<td>4/20/16 9:00AM</td>
				<td>4/20/16 3:00PM</td>
				<td>N/A</td>
			</tr>
			<tr align="center">
				<td>Video Recorder</td>
				<td>Vizio</td>
				<td>4/20/16 10:00AM</td>
				<td>4/20/16 5:00PM</td>
				<td>N/A</td>
			</tr>
		</table>
	</div>
@stop