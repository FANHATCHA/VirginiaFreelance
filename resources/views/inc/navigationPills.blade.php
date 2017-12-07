<div class="row">
@if(count($clientExps) > 0)
 @foreach ($clientExps as $key => $clientExp)
<style media="screen">
/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color:white;

}
/* Bottom left text */
.bottom-left {
    position: absolute;
    bottom: 4px;
    left: 8px;
}

/* Bottom right text */
.bottom-right {
    position: absolute;
    bottom: 4px;
    right: 8px;
}
</style>
<div class="card" style="margin-left:20px;">
    <h3 class="text-center" style="font-weight: bold; font-size:15px;">{{ $clientExp->headerTitle}}</h3>
  <img src="/img/ux_images/{{$clientExp->ux_image }}" class="img-rounded" alt="{{$clientExp->description}}" style="width:20rem;">
  <button type="button" class="bottom-right btn btn btn-sm btn-default btn-round">{{$clientExp->btnOneName}}</button></br>
  <button type="button" class=" bottom-left btn btn btn-sm btn-warning btn-round">{{$clientExp->btnTwoName}}</button>
  <h4 class="text-center centered">{!! $clientExp->subTitle!!}</h4>
</div>
@endforeach
{{ $clientExps->links() }}
@else
 <p><div class="alert alert-danger" role="alert">
<strong>No Client Experience found!</strong>
</div></p>
@endif
</div>
