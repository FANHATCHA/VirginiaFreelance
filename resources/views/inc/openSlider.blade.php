<div class="header">
    <h4 class="title">Destinations</h4>

</div>
<div class="content">
  @if(count($internalSliders) > 0)
    <table class="table table-striped">
<tr>
   <th>Destination Name</th>
   <th>Duration</th>
   <th>Edit</th>
   <th>Add </th>

</tr>
@foreach($internalSliders as $destination)
 <tr>
<td> <img src="../img/internalSlider_images/{{ $destination->slider_image }}" alt=""> </td>
  <td>{{$destination->created_at->diffForHumans()}}</td>
  <td>
    <a href="/destinations/{{$destination->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>

    <td>
      <a href="/destinations/{{$destination->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>

</tr>
  @endforeach
{{$internalSliders->links()}}
</table>
@else
  <p>No destination Found!</p>
@endif

</div>
</hr>
<div class="header">
    <h4 class="title">{{$getDestinations->destinationName}}</h4>
    <p class="category">Slider</p>
   <p class="category">
     <i class="ti-pencil-alt"></i>
      <i class="ti-trash"></i>
   </p>
</div>

  <div class="content">
        {!! Form::open(['action' => 'InternalSliderCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}
         <div class="row">
        <div class="col-md-12">
        <div class="form-group">
        <label>Slider Position</label>
          <select class="form-control border-input" name="slider_position" id="slider_position" required>
          <option disabled="" selected=""></option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          </select>
        </div>
       </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group border-input">
                    <label>Upload image</label>
                    {{Form::file('slider_image')}}

                </div>
            </div>
        </div>
          <div class="row">
              <div class="col-md-10">
                  <div class="form-group border-input">
                      <label>Description</label>
                      {{Form::textarea('description', '', ['id' => 'slider-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
                  </div>
              </div>
          </div>
          <div class="text-center">
              {{ Form::hidden('destination_slug', $getDestinations->slug) }}
              {{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
               {!! Form::close() !!}
</div>
</div>
