<div class="col-lg-8 col-md-7">
    <div class="card">
        <div class="header">
            <h4 class="title">Hot Deals</h4>
        </div>

        <div class="content">
          @include('inc.messages')
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
                  <div class="col-md-10">
                      <div class="form-group border-input">
                          <label>Description</label>
                          {{Form::textarea('description', '', ['id' => 'hotdeals-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
                      </div>
                  </div>
              </div>
               <div class="row">
              <div class="col-md-12">
              <div class="form-group">
              <label>Number of stars</label>
                <select class="form-control border-input" name="numberofStars" id="nummberOfStars" required>
                <option disabled="" selected=""></option>
                <option value="1"> 1</option>
                <option value="2"> 2</option>
                <option value="3"> 3</option>
                <option value="4"> 4</option>
                <option value="5"> 5</option>
          </select>


            </textarea>
          </div>
             </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group border-input">
                          <label>Price</label>
                          {{Form::text('price', '', ['class' => 'form-control border-input','required'])}}

                      </div>
                  </div>
              </div>
                <div class="text-center">
                    {{ Form::hidden('username', auth()->user()->name) }}
                    {{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
                     {!! Form::close() !!}
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
