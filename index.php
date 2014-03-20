<?php include('inc/header.php'); ?>


<!--  This is the home page, this is where a user can login as either a professor or student -->
<!--  Please check out Foundation 5 framework if you plan on changing any of the visuals -->

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
  <div class="small-6 large-8 columns">
  <!--  This is where the loging form will go -->
  <form>


  <div class="row">
    <div class="large-6 columns">
      <label>Professor loging
        <input type="text" placeholder="Username" />
      </label>
      <label>
        <input type="text" placeholder="Password" />
      </label>
      <a href="#" class="button [tiny small large]">Professor Login</a>
    </div>
  </div>
  


  <div class="row">
    <div class="large-4 columns">
      <label>Student Login
        <input type="text" placeholder="OneTimeKey" />
      </label>

    </div>
  </div>


  <div class="row">
    <div class="large-6 columns">
      <label>Course Selection
        <select>
          <option value="CMPT-280">CMPT-280</option>
          <option value="CMPT-281">CMPT-281</option>
          <option value="CMPT-371">CMPT-371</option>
          <option value="CMPT-372">CMPT-372</option>
        </select>
      </label>
      <a href="#" class="button [tiny small large]">Student Login</a>
    </div>
  </div>
  
</form>

</div>
  <div class="small-12 large-2 columns"> Right part of the grid</div>
</div>





<?php include('inc/footer.php'); ?>

    
    