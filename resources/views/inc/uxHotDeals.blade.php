<div class="list-content clearfix">
					@if(count($hotdeals) > 0)
				 @foreach ($hotdeals as $key => $hotdeal)
					<div class="list-item-entry">
							<a href="/hot-deals/{{$hotdeal->slug}}">
								<div class="hotel-item style-9 bg-white">
								<div class="table-view">
										<div class="radius-top cell-view">
											<a href="/hot-deals/{{$hotdeal->slug}}">
											<img src="/img/rent_images/{{$hotdeal->rent_image}}" alt="{{$hotdeal->hotDealTitle}}" class="img-fluid">
										</a>

										</div>
										<div class="title hotel-middle cell-view">
								<div class="tour-info-line clearfix">
									<div class="tour-info fl">
											<div style="font-size:20px;">
                      <b><a href="/hot-deals/{{$hotdeal->slug}}"> {{$hotdeal->hotDealTitle}}</a></b>

											</div>
										</div>

								</div>
							</br>
												<div >
													<i class="fa fa-clock-o" aria-hidden="true" style="color:#ff6600;"> Ref N°</i> <b style="color:#A9A9A9">{{$hotdeal->reference}}</b> </br>

												</div></br>
													<div class="rate-wrap list-hidden">

													</div>
											<div style="color:black;">{{str_limit($hotdeal->details, 100)}} </div></br>
											<center>
											<div class="buttons-block">
												<a href="/hot-deals/{{$hotdeal->slug}}" class="c-button b-40 bg-white hv-transparent fr" style="background:#ff6600; border:#ff6600;">View More</a>
											</div>
											</center>
										</div>
										<div class="title hotel-right clearfix cell-view grid-hidden">
													<div class="rate-wrap">
														<b style="color:#ff6600:">Statut</b></br>
														@if ($hotdeal->status == 'Open')
														<button type="button" class="btn btn-success">New</button>
													@elseif ($hotdeal->status == 'Close')
														<button type="button" class="btn btn-danger">Close</button>
														@endif

													</div>
											<div class="hotel-person color-dark-2">Price <span class="color-blue">{{ $hotdeal->price }}</span></div>
										</div>
								</div>
							</div>
						</a>
					</div>
				@endforeach

@else
<p><div class="alert alert-danger" role="alert">
<strong>No Item found!</strong>
</div></p>
@endif

			</div>
					<center>
			<div class="c_pagination clearfix padd-120">
					{{ $hotdeals->links() }}
					</div>
				</center>
		</div>
	</div>

</div>
