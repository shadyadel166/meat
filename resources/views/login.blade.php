<x-head></x-head>
</head>
<body>
    <link rel="stylesheet" href="asset/css/userform.css">

<x-nav></x-nav>
@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif



<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="\asset\img\regs.jpg"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Eat Healthy Eat Fresh</h4>
                  </div>

                  <form action="{{ route('login')}}" method="POST">
                    <p>Please login to your account</p>

                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">email</label>
                      <input type="email" name="email" id="form2Example11" class="form-control"
                        placeholder="email" />
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>

                        @endif
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                      <input name="password" type="password" id="form2Example22" class="form-control" />
                      @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>

                      @endif
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                        in</button><br>
                         <a class="text-muted" href="#!">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <a href="registerForm">
                          <button type="button" class="btn btn-outline-danger" href="registration" >Don't have an account?</button>
                        </a>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gr">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a Stor</h4>
                  <p class="small mb-0">Login today to unlock exclusive deals and discounts, convenient meat delivery, and access to the freshest, healthiest meat on the market!
                    At The Dr.meat, we believe that everyone deserves to have access to high-quality, nutritious meat. That's why we source our meat from only the most trusted and reputable farms and suppliers.
                    Our meat is raised without antibiotics or hormones, and it's free of artificial ingredients and preservatives.
                    We also offer a variety of grass-fed and organic meat options to choose from..</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
