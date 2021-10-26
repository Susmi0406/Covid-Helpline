<!DOCTYPE html>
<html lang="en">
  <head>
  	<base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  	
    <li> <x-app-layout></x-app-layout></li> 
    <div class="container-scroller">         
     @include("admin.navbar")

      <div class = "col-10">
	      <table align = "center" cellpadding="5">
	      	<form  method="POST" action="{{url('/updatephi')}}"  enctype="multipart/form-data">
	      		@csrf
	      		<input type="hidden" name="id" value="{{$details->id}}">
    		
    			<th style = "font-size:25px; color: #FFFAF0;">Add PHI Details</th>
    			<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">Name</label></td>
    			<td><input type="text" name="name" value="{{$details->name}}" required ></td>
    		    </tr>
    		
    	        <tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">District</label></td>
    			<td><input type="text" name="district" value="{{$details->district}}"  required ></td>
    		</tr>
    		<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">MOH Area</label></td>
    			<td><input type="text" name="moharea" value="{{$details->moharea}}"  required ></td>
    		</tr>
    		<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">PHI Range</label></td>
    			<td><input type="text" name="phirange" value="{{$details->phirange}}"  required ></td>
    		</tr>
    		<tr>
    			<td><label style = "font-size : 25px; color: #FFFFFF">Contact No</label></td>
    			<td><input type="text" name="contactno" value="{{$details->contactno}}"  required="10"></td>
    		</tr>
        <tr>
          <td><label style = "font-size : 25px; color: #FFFFFF">Email</label></td>
          <td><input type="email" name="email" value="{{$details->email}}" required></td>
        </tr>
    		<br>
            <tr>
            	<td><button type = "submit" name = "" class="btn btn-primary" style="font-size: 18px; width: 90%; font-family:courier;" ><b>Update</b></button></td>

                
		   </tr>

    	</form>
    </table></div>
</div>
     
     @include("admin.adminscript")
  </body>
</html>
