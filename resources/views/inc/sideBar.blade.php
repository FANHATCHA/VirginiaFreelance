<div class="sidebar-block">
  <center>
  <a href="https://www.facebook.com/Virginia-Freelance-Property-Agent-567082836786068/" target="_blank"><img src="{{ asset('img/virginiaPhoto.jpg') }}" class="img-circle img-no-padding img-responsive" alt="Virginia Freelance Property Agent Facebook"></center></a>

  <center>
</center>

  <h6 class="sidebar-title color-dark-2" style="font-size:10px;">Virginia Freelance Property Agent </br><i style="font-size:10px; color:green;">(E) virgeckard@hotmail.com</i>
    <a href="https://www.facebook.com/Virginia-Freelance-Property-Agent-567082836786068/" target="_blank"> <img src="{{ asset('ux/facebook_logos_PNG19748.png') }}" alt="Virginia Freelance Property Agent Facebook" width="25px;"> </a>
   </h6>
   @include('inc.messages')
   {!! Form::open(['action' => 'SaveMsgCtrl@store', 'method' => 'POST','onsubmit'=> 'ShowLoading()']) !!}
   {{ csrf_field() }}
   <style media="screen">
     input[type="email"],input[type="text"],input[type="textarea"] {
       padding:8px;
       font-weight: bold;
       border: 1px solid #ff6600;
        border-radius: 4px;
       background: white;
     }

     .alert-success{
       background-color: rgb(36,187,82);
     }
     .alert-danger{
       background-color: red;
     }
   </style>
  </style>

  <div class="form-group">
  <input class="form-control input-sm" id="inputsm" type="email" placeholder="Email" name="email" required>
  </div>
  <div class="form-group">

  <input class="form-control input-sm" id="inputsm" type="text" placeholder="Phone N°" name="phone" required>
  </div>
  <div class="form-group">
  <input class="form-control input-sm" id="inputsm" type="text" placeholder="Full Name" name="fullName" required>
  </div>

  <div class="form-group">
  <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Ask for Information"></textarea>
  </div>

   {{Form::submit('Send', ['class'=>'c-button',' style'=>'background:#ff6600; color:white;'])}}
    {!! Form::close() !!}

</div>
