
        <div class="header">
            <h4 class="title">Hot Deals</h4>
        </div>

        <div class="content">
        
              {!! Form::open(['action' => 'HotDealsCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              {{ csrf_field() }}
              <div class="row">
                  <div class="col-md-5">
                      <div class="form-group border-input">
                          <label>Hot Deal Image</label>
                          {{Form::file('hotdeals_image')}}

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group border-input">
                          <label>Hot deal Title</label>
                          {{Form::text('hotDealTitle', '', ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group border-input">
                          <label>Location</label>
                          {{Form::text('hotDealLocation', '', ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
              <div class="row">
             <div class="col-md-2">
             <div class="form-group">
             <label>What is for ?</label>
               <select class="form-control border-input" name="whatIsItFor" id="whatIsItFor" required>
               <option disabled="" selected=""></option>
               <option value="Sale">Sale</option>
               <option value="Rent">Rent</option>
               <option value="Other">Other</option>
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
              <div class="row">
                  <div class="col-md-10">
                      <div class="form-group border-input">
                          <label>Description</label>
                          {{Form::textarea('description', '', ['id' => 'description-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
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
