@extends( 'template' )

@section( 'content' )
	<div class="content">
	<h1>Requests</h1>
		{{ $user }}
		<table border="2" width="100%" cellpading="4" cellspacing="3">
			<tr>
				<th colspan="5"><h1 class="pageHeader">Rentals</h1></th>
			</tr>
		</table>
	</div>
@stop