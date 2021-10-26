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
	      	<form  method="POST" action="{{url('/uploadgsdetails')}}"  enctype="multipart/form-data">
	      		@csrf
    		
    			<th style = "font-size:25px; color: #FFFAF0;">Add G.S Details</th>
    			<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">Name</label></td>
    			<td><input type="text" name="name" placeholder="Enter the FullName" required ></td>
    		    </tr>
    		
    	        <tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">District</label></td>
    			<td><input type="text" name="district" placeholder="Enter the District" required ></td>
    		</tr>
    		<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">DS Division</label></td>
    			<td><input type="text" name="dsdivision" placeholder="Enter the MOH Area" required ></td>
    		</tr>
    		<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">GN Division</label></td>
    			<td><input type="text" name="gndivision" placeholder="Enter the PHI Range" required ></td>
    		</tr>
    		<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">Contact No</label></td>
    			<td><input type="text" name="contactno" placeholder="Enter the Contact Number" required="10"></td>
    		</tr>
        <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">Email</label></td>
          <td><input type="email" name="email" placeholder="Enter the Email Address" required="10"></td>
        </tr>
    		<br>
            <tr>
            	<td><button type = "submit" name = "" class="btn btn-primary" style="font-size: 18px; width: 90%; font-family:courier;" ><b>Update</b></button></td>
            	<td><input type="submit" value="Add" class="btn btn-primary" style="font-size: 18px; width: 100%; font-family:courier;">
            		</td>
                
		   </tr>

             
             </table>

    	</form>
            <br>
            <br>
            <br>
    <table align = "center" cellpadding="5">
            
           <tr>
               <td><a  href="{{url('/gsview')}}" class="btn btn-info btn-sm"  style="font-size: 18px;  width: 100%; font-family:courier;">VIEW PHI DETAILS</a>
           </tr>
       </table>
 

    </div>
    
    
    </div>
    
     @include("admin.adminscript")
  </body>
</html>