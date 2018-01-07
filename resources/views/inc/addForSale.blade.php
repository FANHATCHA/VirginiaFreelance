
        <div class="header">
            <h4 class="title">For Sale</h4>
        </div>

        <div class="content">

              {!! Form::open(['action' => 'ForSaleCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              {{ csrf_field() }}
              <div class="row">
                  <div class="col-md-5">
                      <div class="form-group border-input">
                          <label>For Sale Image</label>
                          {{Form::file('forSale_image')}}

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-5">
                      <div class="form-group border-input">
                          <label>For Sale Title</label>
                          {{Form::text('forSaleTitle', '', ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group border-input">
                          <label>Location</label>
                          {{Form::text('forSaleLocation', '', ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
              <div class="row">
             <div class="col-md-4">
             <div class="form-group">
             <label><b style="color:red;">What is for ?</b> (For Sale*)</label>
               <select class="form-control border-input" name="whatIsItFor" id="whatIsItFor" required>
               <option disabled="" selected=""></option>
               <option value="houses">Houses</option>
               <option value="apartments">Apartments</option>
               <option value="land">Land</option>
               <option value="office-commercial-spaces">Office and commercial spaces</option>
               <option value="new-building">New Building</option>
               <option value="to-buy-for-foreigners">To buy for foreigners</option>
         </select>
         </div>
            </div>
             </div>
             <div class="row">
            <div class="col-md-2">
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
                         <label>Details</label>
                         {{Form::textarea('details', '', ['id' => 'details-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
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
