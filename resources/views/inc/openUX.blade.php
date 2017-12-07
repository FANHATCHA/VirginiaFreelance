<div class="header">
    <h4 class="title">{{$getDestinations->destinationName}}</h4>
    <p class="category">Client experience</p>
</div>

  <div class="content">
    {!! Form::open(['action' => 'UXCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-5">
            <div class="form-group border-input">
                <label>Image</label>
                {{Form::file('ux_image')}}

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group border-input">
                <label>Header Title</label>
                {{Form::text('headerTitle', '', ['class' => 'form-control border-input','required'])}}

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="form-group border-input">
                <label>Sub Title</label>
                {{Form::textarea('subTitle', '', ['id' => 'subTitle-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group border-input">
                <label>Description</label>
                {{Form::text('description', '', ['class' => 'form-control border-input','required'])}}

            </div>
        </div>
    </div>
  <div class="row">
        <div class="col-md-12">
            <div class="form-group border-input">
                <label>Button 1 name</label>
                {{Form::text('btnOneName', '', ['class' => 'form-control border-input','required'])}}

            </div>
        </div>
    </div>
    <div class="row">
          <div class="col-md-12">
              <div class="form-group border-input">
                  <label>Button 2 name</label>
                  {{Form::text('btnTwoName', '', ['class' => 'form-control border-input','required'])}}

              </div>
          </div>
      </div>
      <div class="text-center">
          {{ Form::hidden('destination_slug', $getDestinations->slug) }}
          {{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
           {!! Form::close() !!}
</div>
</div>
