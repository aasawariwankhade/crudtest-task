@include('header')
<div class="container">
      <div class="row m-2">
        <div class="col-md-6 offset-2">
        <h2 class="text-center">Create a account</h2><br><br>
           <form action="{{ url('/register') }} " method="POST">
             {{ csrf_field()}}

             @if(count($errors) > 0)
           @foreach($errors->all() as $error)
            <div class="col-md-8 alert alert-danger">{{$error}}</div>
           @endforeach
           @endif

              @if(@session('response'))
                <div class="col-md-8 alert alert-success">
                {{ @session ('success')}}
                </div>
              @endif
             <div class="form-group input-group">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                </div>
                <input type="text" name="username" class="form-control" placeholder="fullname" required>
              </div>
              <div class="form-group input-group">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="email address" required>
              </div>
              <div class="form-group input-group">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                </div>
                <input type="text" name="mobile" class="form-control" placeholder="mobile" required>
              </div>
              <div class="form-group input-group">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                </div>
                <input type="text" name="password" class="form-control" placeholder="create password" required>
              </div>
              <div class="form-group input-group">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                </div>
                <input type="text" name="cpassword" class="form-control" placeholder="Conform password" required>
              </div>
               <button type="submit" name="submit" class="btn btn-primary">create account</button><br>
               <div class="row">
                <h5>have a account?</h5>&nbsp;&nbsp;<a href="#">log in</a>
               </div>
           </form>
        </div>
      </div>
    </div>
  

