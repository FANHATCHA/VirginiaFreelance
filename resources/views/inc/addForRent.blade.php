
        <div class="header">
            <h4 class="title">Add For Sale or to Rent</h4>
        </div>

        <div class="content">

              {!! Form::open(['action' => 'RentCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              {{ csrf_field() }}
              <div class="row">
                  <div class="col-md-8">
                      <div class="form-group border-input">
                          <label>Item to Rent or for sale Image</label>
                          {{Form::file('rent_image')}}

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-8">
                      <div class="form-group border-input">
                          <label>Item to rent or for sale Title</label>
                          {{Form::text('rentTitle', '', ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group border-input">
                          <label>Location</label>
                          {{Form::text('rentLocation', '', ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
              <div class="row">
             <div class="col-md-6">
             <div class="form-group">
             <label><b style="color:red;">What is for ?</b></br>  (Rent or for sale)</label>
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
            <div class="col-md-4">
            <div class="form-group">
            <label>Status</label>
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
                         {{Form::text('price', '', ['class' => 'form-control border-input','required'])}}

                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-10">
                     <div class="form-group border-input">
                         <label>Small description</label>
                         {{Form::textarea('details', '', ['rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
                     </div>
                 </div>
             </div>


                <div class="text-center">
                    {{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
                     {!! Form::close() !!}
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
