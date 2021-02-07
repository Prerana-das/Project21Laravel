@extends('layouts.master_admin')
@section('content')

	<div class="content">
		<div class="container">
			<button type="button" class="_btn _action_btn add_btn _mar_b30" data-toggle="modal" data-target="#createModal">
				<i class="fa fa-plus-circle"></i>&nbsp;Add Muslim Name
			</button>

            @if (session('alert_message'))
            <div class="alert alert-danger" role="alert">
                {{ session('alert_message') }}
            </div>
            @endif
			<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
			<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">

				<p class="_title0">Muslim Name</p>

				<div class="_overflow _table_div">
					<table class="_table">
							<!-- TABLE TITLE -->
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Meaning</th>
							<th>Gender</th>
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
								<span>{{$rowww->meaning}}</span>
							</td>
							<td>
								<span>{{$rowww->gender}}</span>
							</td>
							<td>
								<button type="button" class="_btn _action_btn edit_btn1 editclass" data-toggle="modal" data-id="{{$rowww->id}}" 
                                data-name="{{$rowww->name}}" data-meaning="{{$rowww->meaning}}" data-gender="{{$rowww->gender}}" data-target="#editModal">
									Edit 
								</button>
								<a href="{{action('PrayerController@delMuslimName',['id' => $rowww->id])}}" class=" _btn _action_btn make_btn1" >Delete</a>
							</td>
						</tr @endforeach>
							<!-- ITEMS -->
					</table>
				</div>
			</div>
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
		</div>
	</div>

	<div class="modal modal_zindex fade" id="createModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus-square"></i> Add Muslim Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('PrayerController@saveMuslimName')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Name</label>
                                    <input type="text" placeholder="Enter name" name="name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Meaning</label>
                                    <input type="text" placeholder="Enter meaning" name="meaning" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Gender</label>
                                    <input type="text" placeholder="Enter gender" name="gender" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

	 <!--Edit Modal -->
	<div class="modal modal_zindex fade" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus-square"></i>Edit Muslim Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('PrayerController@editMuslimName')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Name</label>
                                    <input type="text" placeholder="Enter name" name="name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Meaning</label>
                                    <input type="text" placeholder="Enter meaning" name="meaning" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Gender</label>
                                    <input type="text" placeholder="Enter gender" name="gender" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
	$(function () {
           $('.editclass').click(function () {
               var id = $(this).data('id');
               var name= $(this).data('name');
               var meaning = $(this).data('meaning');
               var gender = $(this).data('gender');
               $('#editModal [name=id]').val(id);
               $('#editModal [name=name]').val(name);
               $('#editModal [name=meaning]').val(meaning);
               $('#editModal [name=gender]').val(gender);
           });
       });
		
    </script>
@endsection