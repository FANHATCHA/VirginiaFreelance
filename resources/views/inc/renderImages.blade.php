
<header class="s-title">
  <h2>Most popular Flight+Hotel packages</h2>
</header>
<!--deal-->
@if(count($allDestinations) > 0)
 @foreach ($allDestinations as $key => $allDestination)
<article class="one-fourth">
  <figure><a href="/{{ $allDestination->slug }}" title=""><img src="ui/images/uploads/hotel1.jpg" alt="" /></a></figure>
  <div class="details">
    <h3>{{ $allDestination->destinationName }}
      <span class="stars">
        <i class="material-icons">&#xE838;</i>
        <i class="material-icons">&#xE838;</i>
        <i class="material-icons">&#xE838;</i>
        <i class="material-icons">&#xE838;</i>
      </span>
    </h3>
    <span class="address">London  •  <a href="#">Show on map</a></span>
    <span class="rating"> 8 /10</span>
    <span class="price">Price per person from  <em>$ 500</em> </span>
    <div class="description">
      <p>4 Nights, Self Catering from London Southend with EasyJet Airlineson 25th January 2016 <a href="hotel.html">More info</a></p>
    </div>
    <a href="hotel.html" title="Book now" class="gradient-button">Book now</a>
  </div>
</article>
<!--//deal-->
@endforeach
</br>

{{ $allDestinations->links() }}

@else
 <p>
<div class="alert alert-danger" role="alert">
<strong>No destiantions found!</strong>
</div>
</p>
@endif
