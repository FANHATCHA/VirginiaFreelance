
					<div class="detail-content-block">
                        <div class="simple-tab color-1 tab-wrapper">
                            <div class="tab-nav-wrapper">
                                <div  class="nav-tab  clearfix">
                                    <div class="nav-tab-item active">
                                      <i class="fa fa-eye" aria-hidden="true"></i> View Description
                                    </div>
                                    <div class="nav-tab-item">
                                      <i class="fa fa-comments" aria-hidden="true"> Ask For Information</i>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-content clearfix">
                                <div class="tab-info active">

                                	<p style="background:white">{!! $deals->description !!}</p>


                                </div>
                                <div class="tab-info">
																	<center><div style="font-size:20px; font-weight:bold;"> Send us a message</div></center></br>

															 <center>
																 {!! Form::open(['action' => 'SaveMsgCtrl@store', 'method' => 'POST','onsubmit'=> 'ShowLoading()']) !!}
																 {{ csrf_field() }}
																 <style media="screen">
																 input[type="email"],input[type="text"],input[type="textarea"] {
																	 padding:10px;
																	 font-weight: bold;
																	 border: 1px solid #ff6600;
																		border-radius: 5px;
																	 background: white;
																 }
																 .alert-success{
																	 background-color: rgb(36,187,82);
																 }
																 .alert-danger{
																	 background-color: red;
																 }
																 </style>
															 </style>

															 <div class="form-group">
																<input class="form-control input-lg" id="inputsm" type="email" placeholder="Email" name="email" required>
															 </div>
															<div class="form-group">

																<input class="form-control input-lg" id="inputsm" type="text" placeholder="Phone N°" name="phone" required>
															</div>
															<div class="form-group">
																<input class="form-control input-lg" id="inputsm" type="text" placeholder="Full Name" name="fullName" required>
															</div>

													 <div class="form-group">
															<textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Ask for Information"></textarea>
													 </div>

																 {{Form::submit('Send', ['class'=>'c-button',' style'=>'background:#ff6600; color:white;'])}}
																	{!! Form::close() !!}
															 </center>
																</p>




                                </div>


                            </div>
                        </div>
					</div>
