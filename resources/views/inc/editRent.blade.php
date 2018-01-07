
        <div class="header">
            <h4 class="title">Edit Rent/for sale</h4>
        </div>

        <div class="content">

      {!! Form::open(['action' => ['RentCtrl@update', $items->id], 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
       {{ csrf_field() }}
       {{ method_field('PUT') }}
              <div class="row">
                  <div class="col-md-5">
                      <div class="form-group border-input">
                          <label>Item to Rent/for sale Image</label>
                          {{Form::file('rent_image', ['class' => 'required'])}}

                      </div>
                  </div>
                  <img src="/img/rent_images/{{$items->rent_image}}" alt="{{$items->rentTitle}}"class="rounded float-left" width="250px;">
              </div>
              <div class="row">
                  <div class="col-md-5">
                      <div class="form-group border-input">
                          <label>Item to rent/for sale Title</label>
                          {{Form::text('rentTitle',$items->rentTitle, ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group border-input">
                          <label>Location</label>
                          {{Form::text('rentLocation',$items->rentLocation, ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
              <div class="row">
             <div class="col-md-6">
             <div class="form-group">
             <label><b style="color:red;">What is for ?</b> ({{$items->whatIsItFor}})</label>
             <select class="form-control border-input" name="whatIsItFor" id="whatIsItFor" required>
           <optgroup label="Rent">
             <option disabled="" selected=""></option>
             <option value="long-term">Long Term</option>
             <option value="apartment">Apartment to rent</option>
             <option value="Short-Term/Holidays">Short-Term/Holidays</option>
             <option value="office-commercial-space">Office and commercial spaces</option>
           </optgroup>
           <optgroup label="For Sale">
             <option value="houses">Houses</option>
             <option value="apartments">Apartments</option>
             <option value="land">Land</option>
             <option value="office-commercial-spaces">Office and commercial spaces</option>
             <option value="new-building">New Building</option>
             <option value="to-buy-for-foreigners">To buy for foreigners</option>
           </optgroup>
         </select>
         </div>
            </div>
             </div>
             <div class="row">
            <div class="col-md-2">
            <div class="form-group">
            <label>Status </br> ({{$items->status}})</label>
              <select class="form-control border-input" name="status" id="status" required>
              <option disabled="" selected=""></option>
              <option value="Open">Open</option>
              <option value="Close">Close</option>
        </select>
        </div>
           </div>
            </div>
             <div class="row">
                 <div class="col-md-4">
                     <div class="form-group border-input">
                         <label>Price</label>
                         {{Form::text('price', $items->price, ['class' => 'form-control border-input','required'])}}

                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-10">
                     <div class="form-group border-input">
                         <label>Details</label>
                         {{Form::textarea('details',$items->details,['rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
                     </div>
                 </div>
             </div>


                <div class="text-center">
                    {{Form::submit('Edit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
                     {!! Form::close() !!}
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
