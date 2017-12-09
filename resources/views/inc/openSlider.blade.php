<div class="card">
<div class="header">
    <h4 class="title">Internal Slider</h4>

</div>
<div class="content">
  @if(count($internalSliders) > 0)
    <div class="content table-responsive table-full-width">
    <table class="table table-striped">
<tr>
   <th>Slider Position</th>
   <th>Duration</th>
   <th>Create</th>
   <th>Edit</th>
   <th>Delete</th>
    <th>Image</th>
</tr>
@foreach($internalSliders as $destination)
 <tr>
  <td>{{$destination->slider_position}}</td>
  <td>{{$destination->created_at->diffForHumans()}}</td>
  <td>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    <i class="ti-plus"></i>
    </button>
  </td>
  <td><a href="/destinations/{{$destination->id}}/edit" class="btn btn-default"><i class="ti-pencil-alt"></i>Edit</a></td>
  <td>
    <form action="/internal-slider/{{$destination->id}}" method="POST">
  {{ csrf_field()}}
  {{ method_field('DELETE')}}
 <button type="submit" value="delete" name="Delete" class="btn btn-danger"><span class="ti-trash"></span></button>
   </form>
  </td>
  <td><img src="../img/internalSlider_images/{{ $destination->slider_image }}" style="width:20%" class="img-rounded" alt=""> </td>

</tr>
  @endforeach
{{$internalSliders->links()}}
</table>
</div>
@else
  <p>
    No Internal Slider Found!</br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    <i class="ti-plus"> Create</i>
    </button>
  </p>
@endif

</div>
</div>
