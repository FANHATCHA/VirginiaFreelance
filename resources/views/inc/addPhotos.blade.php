<div class="content">
 {!! Form::open(['action' => 'AddPhotoCtrl@store', 'method' => 'POST',  'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
  {{ csrf_field() }}
        <div class="row">
            <div class="col-md-5">
                <div class="form-group border-input">
                    <label>add the image</label>
                    {{Form::file('image', ['class' => 'required'])}}

                </div>
            </div>
        </div></br>
          <div class="text-center">
             {{ Form::hidden('photo_slug', $items->slug) }}
              {{Form::submit('add Photo', ['class'=>'btn btn-info btn-fill btn-wd'])}}
               {!! Form::close() !!}
        </div>
</div>
