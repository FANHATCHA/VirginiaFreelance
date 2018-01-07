<div class="list-content clearfix">
					@if(count($longTerms) > 0)
				 @foreach ($longTerms as $key => $longTerm)
					<div class="list-item-entry">
							<a href="/tailor-made-trip/">
								<div class="hotel-item style-9 bg-white">
								<div class="table-view">
										<div class="radius-top cell-view">
											<a href="/for-sale/{{$longTerm->whatIsItFor}}/{{$longTerm->slug}}">
											<img src="/img/rent_images/{{$longTerm->rent_image}}" alt="{{$longTerm->rentTitle}}" class="img-fluid">
										</a>

										</div>
										<div class="title hotel-middle cell-view">
								<div class="tour-info-line clearfix">
									<div class="tour-info fl">
											<div style="font-size:20px;">
                      <b><a href="/for-sale/{{$longTerm->whatIsItFor}}/{{$longTerm->slug}}"> {{$longTerm->rentTitle}}</a></b>

											</div>
										</div>

								</div>
							</br>
												<div >
													<i class="fa fa-clock-o" aria-hidden="true" style="color:#ff6600;"> Ref N°</i> <b style="color:#A9A9A9">{{$longTerm->reference}}</b> </br>

												</div>
													<div class="rate-wrap list-hidden">

													</div>
											<div style="color:black;">{{str_limit($longTerm->details, 100)}} </div>
											<center>
											<div class="buttons-block">
												<a href="/for-sale/{{$longTerm->whatIsItFor}}/{{$longTerm->slug}}" class="c-button b-40 bg-white hv-transparent fr" style="background:#ff6600; border:#ff6600;">View More</a>
											</div>
											</center>
										</div>
										<div class="title hotel-right clearfix cell-view grid-hidden">
													<div class="rate-wrap">
														<b style="color:#ff6600:">Status</b></br>
														@if ($longTerm->status == 'Open')
															<i style="color:green;">{{$longTerm->status}}</i>
														@elseif ($longTerm->status == 'Close')
															<i style="color:red;">{{$longTerm->status}}</i>
														@endif
													</div>
											<div class="hotel-person color-dark-2">Price <span class="color-blue">{{ $longTerm->price }}</span></div>
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
					{{ $longTerms->links() }}
					</div>
				</center>
		</div>
	</div>

</div>
