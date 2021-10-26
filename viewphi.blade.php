<!DOCTYPE html>
<html lang="en">
  <head>
    @include("homecss")
  </head>
  <body>
 
      <div class="container-scroller">       
 
@include("homenavbar")

    
        <div class = "col-10">
        <table align = "center" cellpadding="5">
          <form  method="POST" action="{{url('/uploadvaccine')}}"  enctype="multipart/form-data">
            @csrf
        
          <th style = "font-size:25px; color: #FFFAF0;">Vaccine Request</th>
          <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">Name</label></td>
          <td><input type="text" name="name" placeholder="Enter the FullName" required ></td>
            </tr>


            <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">Email</label></td>
          <td><input type="email" name="email" placeholder="Enter Email Address" required ></td>
            </tr>


            <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">Phone number</label></td>
          <td><input type="number" name="phone" placeholder="Enter the Phone Number" required ></td>
            </tr>
        

            <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">Age</label></td>
          <td><input type="number" name="phone" placeholder="Enter Your Age" required ></td>
            </tr>


             <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">gender</label></td>
          <td><input type="text" name="gender" placeholder="Enter the Gender" required ></td>
            </tr>



              <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">District</label></td>
          <td><input type="text" name="district" placeholder="Enter the District" required ></td>
        </tr>
        <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">MOH Area</label></td>
          <td><input type="text" name="moharea" placeholder="Enter the MOH Area" required ></td>
        </tr>
        <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">PHI Range</label></td>
          <td><input type="text" name="phirange" placeholder="Enter the PHI Range" required ></td>
        </tr>
        
        <br>
            <tr>
              <td><button type = "submit" name = "" class="btn btn-primary" style="font-size: 18px; width: 90%; font-family:courier;" ><b>Update</b></button></td>
              <td><input type="submit" value="Add" class="btn btn-primary" style="font-size: 18px; width: 100%; font-family:courier;">
                </td>
                
       </tr>

             
          

      </form>
         </table>
            <br>
            <br>
            <br>
    <table align = "center" cellpadding="5">
            
           <tr>
               <td><a  href="{{url('/phiview')}}" class="btn btn-info btn-sm"  style="font-size: 18px;  width: 100%; font-family:courier;">VIEW PHI DETAILS</a>
           </tr>
       </table>
 

    </div>
     
      
    
    </div>
    
     @include("admin.adminscript")
  </body>
</html>