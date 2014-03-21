<?php include('inc/header.php'); ?>


<div class="row">

  <div class="small-6 large-2 columns"> Left part of the grid

  <ul class="side-nav">
	<li class="active"><a href="#">Link 1</a></li>
	<li><a href="#">Link 2</a></li>
	<li class="divider"></li>
	<li><a href="#">Link 3</a></li>
	<li><a href="#">Link 4</a></li>
   </ul>
</div>
<div class = "large-5 columns">
	 <h3>Welcome Professor</h3><br><br>
	 <label><h4>Edit Your Assessments:</h4>
        <select>
          <option value="Create Assessment">Create Assessment</option>
          <option value="Modify Existing Assessment">Modify Existing Assessment</option>
		  
        </select>
		<a href="createassessment.php" class="button [tiny small large]">Submit</a>

      </label><br><br>
	  	<div class = "large-12 columns">
		<p> You can view the progress your students have made and see the statistics of the completed S&As on our statistics page:</p>
		<a href="statspage.php" class = "button [tiny small large]">View Statistics</a>
		
		</div>
</div>

  <div class="row">
    <div class="small-12 large-3 columns">
      <label>Administrators log in here:
        <input type="text" placeholder="Username" />
      </label>
      <label>
        <input type="text" placeholder="Password" />
      </label>
      <a href="#" class="button [tiny small large]">Professor Login</a>
    </div>
	
	
  </div>
 </div> 

<?php include('inc/footer.php'); ?>
