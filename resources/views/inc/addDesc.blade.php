<div class="content">
        {!! Form::open(['action' => ['ForSaleCtrl@update', $items->id], 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
         {{ csrf_field() }}
         {{ method_field('PUT') }}
  <div class="row">
      <div class="col-md-10">
          <div class="form-group border-input">
              <label>Description</label>
              {{Form::textarea('description',$items->description, ['id' =>'details-ckeditor', 'rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
          </div>
      </div>
  </div>
      </br>
          <div class="text-center">
             {{ Form::hidden('desc_slug', $items->slug) }}
              {{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
               {!! Form::close() !!}
        </div>
</div>
