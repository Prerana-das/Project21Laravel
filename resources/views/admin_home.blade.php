@extends('layouts.master_admin')
@section('content')
<!--========= Content ==========-->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-3">
					<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_one">
						<div class="_1adminOverveiw_card_left">
							<p class="_1adminOverveiw_card_left_num">{{$dua}}</p>

							<p class="_1adminOverveiw_card_left_title">Total Dua</p>
						</div>
						<div class="_1adminOverveiw_card_right">
							<Icon type="ios-paper" />
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_one">
						<div class="_1adminOverveiw_card_left">
							<p class="_1adminOverveiw_card_left_num">{{$hadith}}</p>

							<p class="_1adminOverveiw_card_left_title">Total Hadith</p>
						</div>
						<div class="_1adminOverveiw_card_right">
							<Icon type="ios-paper" />
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_one">
						<div class="_1adminOverveiw_card_left">
							<p class="_1adminOverveiw_card_left_num">{{$video}}</p>

							<p class="_1adminOverveiw_card_left_title">Total Video</p>
						</div>
						<div class="_1adminOverveiw_card_right">
							<Icon type="ios-paper" />
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_one">
						<div class="_1adminOverveiw_card_left">
							<p class="_1adminOverveiw_card_left_num">{{$muslimName}}</p>

							<p class="_1adminOverveiw_card_left_title">Total Muslim Name</p>
						</div>
						<div class="_1adminOverveiw_card_right">
							<Icon type="ios-paper" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

