@extends('layouts.master_admin')
@section('content')

	<div class="content">
		<div class="container">
			<button type="button" class="_btn _action_btn add_btn _mar_b30" data-toggle="modal" data-target="#createModal">
				<i class="fa fa-plus-circle"></i>&nbsp;Add Video
			</button>

            @if (session('alert_message'))
            <div class="alert alert-danger" role="alert">
                {{ session('alert_message') }}
            </div>
            @endif
			<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
			<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">

				<p class="_title0">Scholar Video</p>

				<div class="_overflow _table_div">
					<table class="_table">
							<!-- TABLE TITLE -->
						<tr>
							<th>#</th>
							<th>Video Link</th>
							<th>Action</th>
						</tr>
							<!-- TABLE TITLE -->


							<!-- ITEMS -->
						<tr @foreach($video as $rowww)>
							<td>{{$rowww->id}}</td>
							<td >
								<span>{{$rowww->link}}</span>
							</td>
							<td>
                            <button type="button" class="_btn _action_btn edit_btn1 editclass" data-toggle="modal" data-id="{{$rowww->id}}" 
                                data-link="{{$rowww->link}}" data-target="#editModal">
									Edit 
								</button>
								<a href="{{action('VideoController@del',['id' => $rowww->id])}}" class=" _btn _action_btn make_btn1" >Delete</a>
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
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus-square"></i> Add Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('VideoController@save')}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Enter embed video link</label>
                                    <input type="text" placeholder="Enter link" name="link" class="form-control" >
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
                    <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-plus-square"></i>Edit Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{action('VideoController@edit')}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <input type="hidden" name="id" >
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group input-group-sm mb-2">
                                    <label>Enter embed video link</label>
                                    <input type="text" placeholder="Enter link" name="link" class="form-control" >
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
               var link= $(this).data('link');
               $('#editModal [name=id]').val(id);
               $('#editModal [name=link]').val(link);
           });
       });
		
    </script>
@endsection