<div class="header">
    <h4 class="title">{{$getDestinations->destinationName}}</h4>
    <p class="category">Tailor-made trips</p>
</div>

  <div class="content">
    {!! Form::open(['action' => 'TailorMadeTripCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-5">
            <div class="form-group border-input">
                <label>Image</label>
                {{Form::file('tailorTrip_image')}}

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group border-input">
                <label>Title</label>
                {{Form::text('tailorTripTitle', '', ['class' => 'form-control border-input','required'])}}

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="form-group border-input">
                <label>Description</label>
                {{Form::textarea('description', '', ['id' => 'tailorTrip-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
            </div>
        </div>
    </div>
     <div class="row">
    <div class="col-md-4">
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
          {{ Form::hidden('destination_slug', $getDestinations->slug) }}
          {{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
           {!! Form::close() !!}
</div>
</div>
