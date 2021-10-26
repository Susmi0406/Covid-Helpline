<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
   
    <li> <x-app-layout></x-app-layout></li>  
    	<div class="container-scroller">       
     @include("admin.navbar")


    
        <div class = "col-10">
	      <table align = "center" cellpadding="5">
	      	<form  method="POST" action="{{url('/uploadphidetails')}}"  enctype="multipart/form-data">
	      		@csrf
    		
    			<th style = "font-size:25px; color: #FFFAF0;">Add PHI Details</th>
    			<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">Name</label></td>
    			<td><input type="text" name="name" placeholder="Enter the FullName" required ></td>
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
    		<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">Contact No</label></td>
    			<td><input type="text" name="contactno" placeholder="Enter the Contact Number" required="10"></td>
    		</tr>
        <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">Email</label></td>
          <td><input type="email" name="email" placeholder="Enter the Email" required"></td>
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