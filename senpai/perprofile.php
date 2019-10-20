<?php 
include('header.php');
//$x=$_GET['x'];
$sql="SELECT * FROM users WHERE email='".$_SESSION['em']."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$sql="SELECT * FROM additives WHERE userid='".$row['id']."'";
$res=mysqli_query($conn,$sql);
?>
<div class="container-fluid text-center" style="">
	<div class="container" style="background-color: white;border-radius: 25px;margin-top: 50px;padding-bottom: 20px;">
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
<hr>
<div class="text-center">
	<div style="color: red;font-size: 2em;padding-bottom: 5px;">
			Add New Stuff
		</div>
	<form action="add1.php" method="POST">
			<div class="col-sm-6">
					<select name="Intern" class="headf" style="height: 50px;">
                        <option value="1">Intern</option>
                        <option value="micr">Microsoft</option>
                        <option value="gold">Goldman Sachs</option>
                        <option value="flip">Flipkart</option>
                        <option value="adob">Adobe</option>
                        <option value="sale">SalesForce</option>
                        <option value="foxm">Foxmula</option>
                        <option value="exxo">ExxonMobil</option>
                        <option value="schlu">Schlum</option>
                        <option value="cair">Cairn</option>
                        <option value="sams">Samsung</option>
                        <option value="lnt">L&T Construction</option>
                        <option value="amaz">Amazon</option>
                      </select>
            </div>
            <div class="col-sm-6">
		<input type="submit" name="submit" value="ADD INTERN" class="sear4" style="font-size: 1.5em;" >
</div>

	</form>

	<form action="add2.php" method="POST">
<div class="col-sm-6">
					<select name="placement" class="headf">
                        <option value="1">Placements</option>
                        <option value="micr">Microsoft</option>
                        <option value="gold">Goldman Sachs</option>
                        <option value="flip">Flipkart</option>
                        <option value="adob">Adobe</option>
                        <option value="sale">SalesForce</option>
                        <option value="foxm">Foxmula</option>
                        <option value="exxo">ExxonMobil</option>
                        <option value="schlu">Schlum</option>
                        <option value="cair">Cairn</option>
                        <option value="sams">Samsung</option>
                        <option value="lnt">L&T Construction</option>
                        <option value="amaz">Amazon</option>
                      </select>
         </div>
         <div class="col-sm-6">
		<input type="submit" name="submit" value="ADD PLACEMENT" class="sear4" style="font-size: 1.5em;" >
</div>

	</form>
<div class="col-sm-6">
	<form action="add3.php" method="POST">

					<select name="skills" class="headf">
                         <option value="1">Skills</option>
                         <option value="grap">Graphic Designing</option>
                         <option value="phot">Photography</option>
                         <option value="webd">Web Designing</option>
                         <option value="appd">App Development</option>
                         <option value="mach">Machine Learning</option>
                         <option value="comp">Competitive Programming</option>
                         <option value="swim">Swimming</option>
                         <option value="boxi">Boxing</option>
                         <option value="tenn">Tennis</option>
                      </select>
     </div>
     <div class="col-sm-6">
		<input type="submit" name="submit" value="ADD SKILL" class="sear4" style="font-size: 1.5em;" >

</div>
	</form>

	<form action="add4.php" method="POST">
		<div class="col-sm-6">
					<select name="clubs" class="headf">
                        <option value="1">Clubs</option>
                        <option value="adc">Abhay Dramatics Club</option>
                        <option value="litm">Legends in the Making</option>
                        <option value="wtc">We The Crew</option>
                        <option value="mech">Mechismu Racing</option>
                        <option value="cyber">Cyber Labs</option>
                        <option value="ffi">Fast Forward India</option>
                        <option value="kart">Kartavya</option>
                        <option value="art">Art freaks</option>
                        <option value="ecell">E-Cell</option>
                        <option value="manth">Manthan</option>
                        <option value="md">Mailer Daemon</option>
                      </select>
                </div>
                <div class="col-sm-6">
		<input type="submit" name="submit" value="ADD CLUB" class="sear4" style="font-size: 1.5em;" >
	
</div>
	</form>


</div>
</div>
</div>


<?php 
include('footer.php');
?>