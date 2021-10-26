
<!DOCTYPE html>
<html>
<head>
    @include("homecss")

    <style type="text/css">

      body{
       background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.5)), url('assets/css/maps/doctor.jpg');
       background-size: cover;
       background-repeat: no-repeat;
       background-attachment:fixed;
       background-position : center center;
       
       
    }
    </style>
</head>
<body>
  <div class="container-scroller"> 
     @include("homenavbar")

<br><br>

<center>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form  action="{{url('/uploadvaccine')}}" method="POST"  enctype="multipart/form-data">

                          @csrf

                          <div class="row">
                            <div class="col-lg-12">
                               <b> <h3 style = "font-size:25px; color: #FFFAF0;">Vaccine Request</h3></b><br>
                            </div>


                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" placeholder="Your  FullName" required="">
                              </fieldset><br>
                            </div>
                            <br>


                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text"  pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset><br>
                            </div>

                            <br>


                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                               <input type="text" name="nic" placeholder="Your NIC" required="">
                              </fieldset><br>
                            </div>


                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="number" placeholder="Phone Number" required="">
                              </fieldset><br>
                            </div>

                            <br>

                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                               <input type="text" name="age" placeholder="Your Age" required="">
                              </fieldset><br>
                            </div>

                            <br>

                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="gender" name="gender" id="gender">
                                    <option value="gender">Gender</option>
                                    <option name="male" id="male">Male</option>
                                    <option name="female" id="female">Female</option>
                                    <option name="others" id="others">Others</option>
                                    
                                </select>
                              </fieldset><br>
                            </div>

                            <br>


                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                               <input type="text" name="district" placeholder="Your District" required="">
                              </fieldset><br>
                            </div>

                            <br>

                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                               <input type="text" name="moharea" placeholder="Your MOH Area" required="">
                              </fieldset><br>
                            </div>

                            <br>

                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                               <input type="text" name="phirange" placeholder="Your PHI Range" required="">
                              </fieldset><br>
                            </div>

                            <br>

                            
                  

                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" class="btn btn-info btn-sm"  style="font-size: 18px;  width: 50%; font-family:courier;">Make A Request</button>
                              </fieldset><br><br>
                            </div>
                          </div>
                        </form></center>
                    </div>
                </div>
            </div>
        </div>
      </div>
  
   @include("footer")
       @include("script")

    </body>
</html>