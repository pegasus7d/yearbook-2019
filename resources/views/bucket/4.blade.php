<!-- <div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 10)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>GC</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>The competition must go</h2><br><h2>on.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/10')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
      <h1>GC</h1>
      <h2>The competition must go</h2><br><h2>on.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/10')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>

<div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 11)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>KTJ</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>Let the </h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/11')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
      <h1>KTJ</h1>
      <h2>Let the </h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/11')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>

<div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 12)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>Salsa/Prom</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>Roses are red, violets are </h2><br> 
      <h2>blue..prom date me</h2><br> 
      <h2>and you?</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/12')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
      <h1>Salsa/Prom</h1>
      <h2>Roses are red, violets are </h2><br> 
      <h2>blue..prom date me</h2><br> 
      <h2>and you?</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/12')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div> -->