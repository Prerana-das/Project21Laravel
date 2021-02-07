@extends('layouts.master_admin')
@section('content')

	<div class="content">
		<div class="container">
			<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
			<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">

				<p class="_title0">Contact Messages</p>

				<div class="_overflow _table_div">
					<table class="_table">
							<!-- TABLE TITLE -->
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Subject</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
							<!-- TABLE TITLE -->


							<!-- ITEMS -->
						<tr @foreach($video as $rowww)>
							<td>{{$rowww->id}}</td>
							<td >
								<span>{{$rowww->name}}</span>
							</td>
							<td>
								<span>{{$rowww->email}}</span>
							</td>
							<td>
								<span>{{$rowww->phone}}</span>
							</td>
							<td>
								<span>{{$rowww->subject}}</span>
							</td>
							<td>
								<span>{{$rowww->description}}</span>
							</td>
							<td>
								<a href="{{action('PrayerController@delContact',['id' => $rowww->id])}}" class=" _btn _action_btn make_btn1" >Delete</a>
							</td>
						</tr @endforeach>
							<!-- ITEMS -->
					</table>
				</div>
			</div>
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
		</div>
	</div>
@endsection
