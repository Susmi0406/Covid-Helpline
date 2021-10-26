      <!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    
    <li> <x-app-layout></x-app-layout></li> 
    <li>
       <a  href="{{url('/phidetails')}}" class="btn btn-secondary btn-sm" style="font-size: 18px; width: 10%; font-family:courier;">Back</a> 
    </li>
    <div class="container-scroller">
    <table>
            
                 
     @include("admin.navbar")
     <br>

       
      <form>
        <br>
      <div style="position: relative; top: 60px; right: -60px "> 
      	<table class="table table-dark table-hover">
      		
      		<tr>
      			<th style="padding: 10px">Name</th>
      			<th style="padding: 10px">District</th>
      			<th style="padding: 10px">MOH Area</th>
      			<th style="padding: 10px">PHI Range</th>
      			<th style="padding: 10px">Contact No</th>
            <th style="padding: 10px">Email</th>
            <th style="padding: 10px">Action</th>
            <th style="padding: 10px">Action2</th>
      		</tr>

          @foreach($details as $details)

      		<tr align="center" >

      			<td>{{$details->name}}</td>
      			<td>{{$details->district}}</td>
      			<td>{{$details->moharea}}</td>
      			<td>{{$details->phirange}}</td>
      			<td>{{$details->contactno}}</td>
            <td>{{$details->email}}</td>
            <td><a href="{{url('/deletephi',$details->id)}}" class ="btn btn-danger" style="font-size: 15px; width: 100%;">Delete</a></td>

            <td><a href="{{url('/updatephi',$details->id)}}" class ="btn btn-primary" style="font-size: 15px; width: 100%;">Update</a></td>
      		</tr>
          @endforeach


      	</table> <br>
        </form> 

    </div>

    
 </div>
     @include("admin.adminscript")

  </body>
</html>
