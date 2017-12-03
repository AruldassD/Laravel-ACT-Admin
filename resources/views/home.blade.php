@include('includes.header')
@include('includes.sidebar')
<div class="content-wrapper">
  <section class="content-header"><h1> Welcome {{ Auth::user()->name }}!</h1></section>
  <section class="content">
    <div class="panel-body">
      <center>
       <img src="{{url('img/welcome.jpg')}}" class="img-responsive" alt="welcome" style="border:1px solid;" />
        <h3 style="color:darkorange;"> Welcome to Dashboard</h3>
      </center>         
    </div>
  </section>
</div>
@include('includes.footer')