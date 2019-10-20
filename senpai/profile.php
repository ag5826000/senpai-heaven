<?php 
include('header.php');
$x=$_GET['x'];
$sql="SELECT * FROM users WHERE id='".$x."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$sql="SELECT * FROM additives WHERE userid='".$x."'";
$res=mysqli_query($conn,$sql);
?>
<div class="container-fluid text-center">
	<div class="container" style="background-color: white;border-radius: 25px;margin-top: 50px;">
		<div class="col-sm-3">
				<span class="glyphicon glyphicon-user" style="margin:20px;margin-top: 50px;color: red;font-size: 7em;border: 5px solid red;border-radius: 2em;padding:30px;"></span>
			</div>
			<div class="col-sm-9" style="padding: 20px;">
				<table class="table" >
				    <tbody>
				      <tr>
				        <td><b>Name</b></td>
				        <td><?php echo($row['name']); ?></td>
				      </tr>
				      <tr>
				        <td><b>Place</b></td>
				        <td><?php echo($row['place']); ?></td>
				      </tr>
				      <tr>
				        <td><b>Branch</b></td>
				        <td><?php echo($row['branch']); ?></td>
				      </tr>
				      <tr>
				        <td><b>Year of Study</b></td>
				        <td><?php echo($row['year']); ?></td>
				      </tr>
				      <tr>
				        <td><b>Phone Number</b></td>
				        <td><?php echo($row['phno']); ?></td>
				      </tr>
				      <tr>
				        <td><b>Email</b></td>
				        <td><?php echo($row['email']); ?></td>
				      </tr>
				      
				    </tbody>
				  </table>
	</div>
	<?php
	if(mysqli_num_rows($res)>0)
	{ 
	 ?>
	<div class="text-center">
		<div style="color: red;font-size: 3em;padding-bottom: 20px;">
			Other Info...
		</div>
		<table class="table">
			<tr>
				<td>
					<b>Type</b>
				</td>
				<td>
					<b>Subtype</b>
				</td>
			</tr>
		<?php 
			while($row1=mysqli_fetch_assoc($res))
				{
		 ?>
		 	<tr>
		 		<td>
		 			<?php echo($row1['type']); ?>	
		 		</td>
		 		<td>
		 			<?php echo($row1['sub']); ?>
		 		</td>
		 	</tr>
		 <?php 
		 	}
		  ?>
		  </table>
	</div>
<?php } ?>
</div>
</div>


<?php 
include('footer.php');
?>