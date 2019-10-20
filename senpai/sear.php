<?php 
include('header.php');
if(!isset($_POST['submit']))
header('Location: index.php');
$place=$_POST['place'];
$year=$_POST['year'];
$bra=$_POST['bra'];
$clubs=$_POST['clubs'];
$skills=$_POST['skills'];
$intern=$_POST['Intern'];
$placement=$_POST['placement'];
$sql="SELECT * FROM users WHERE branch LIKE '%".$bra."%' AND year LIKE '%".$year."%' AND place LIKE '%".$place."%'";
$res=mysqli_query($conn,$sql);
//print_r($res);
?>

<div class="container-fluid">
	<div class="row">
		<?php 
			if(mysqli_num_rows($res)>0)
			{
				while($row=mysqli_fetch_assoc($res))
				{
		 ?>
		 <a href="profile.php?x=<?php echo($row['id']); ?>">
		<div class="col-sm-4" style="color: red;">
			<div class="text-center" id="tabb" style="">
				<span class="glyphicon glyphicon-user" style="margin:20px;color: red;font-size: 7em;border: 5px solid red;border-radius: 2em;padding:30px;"></span>
				<table class="table">
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
				    </tbody>
				  </table>
			</div>
		</div>
		</a>
		<?php 
			}
		}
		 ?>
	</div>
</div>

<?php 
include('footer.php');
?>