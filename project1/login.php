<section class="vh-100 bg-image"
  style="background-image: url('images/sunrise.jpg');">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login into your account</h2>

              <form action="action.php" method="post">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="username" />
                  <label class="form-label" for="form3Example1cg">Username</label>
                </div>


                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="pass" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>
              
                <div class="d-flex justify-content-center">
                  <a>
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="Login">Login</button> </a>
                   
                </div>
                <p></p>
                <div class="link"> <p>
                  Don't Have an account yet? <a href="register.php">Register</a>
                </p></div>

               

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .link{
text-align: center;
  }
</style>