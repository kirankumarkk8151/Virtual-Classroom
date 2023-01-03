<style type="text/css">
 
  .secondrow > .row {
     border: 1px solid #ddd;
    /*padding: 5px 30px;*/
    text-align: center; 
    margin: 20px;
    min-height: 50px;
     border-radius: 50%;
  }
  .imgstretch{ 
    padding: 10px 30px;
  }
  .imgstretch img {
    width: 100%;
    height: 100px;
    object-fit: contain;
  }
.thirdrow > .row {
     border: 1px solid #ddd;
    /*padding: 5px 30px;*/
    text-align: center; 
    margin: 50px;
    min-height: 50px;
     border-radius: 50%;
  }
 
</style>

<div class="container">
  <h3>Administrator Panel:Welcome <?php echo $_SESSION['NAME'];?></h3>
 
  <div class="row"> 
    <div class="col-md-6 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/lesson/index.php" title="Lessons"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/book.png"> 
         </div>
         <label>Lessons</label>
        </a>
      </div>
    </div> 
    <div class="col-md-6 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/exercises/index.php" title="Exercises"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/test.png"> 
         </div>
         <label>Exercises</label>
        </a>
      </div>
    </div> 
  </div>
    <div class="row">
       <?php if($_SESSION['TYPE']=="Administrator"){ ?>
    <div class="col-md-6 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/user/index.php" title="Manage Users"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/users.png"> 
         </div>
         <label>Manage Users</label>
        </a>
      </div>
    </div>
  <?php } ?>
    <div class="col-md-6 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/class/index.php" title="class"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/video.png"> 
         </div>
         <label>class</label>
        </a>
      </div>
    </div> 
	<div class="row"> 
    <div class="col-md-6 secondrow">
      <div class="row">
        <a href="<?php echo web_root; ?>admin/modules/chat/index.php" title="Lessons"> 
        <div class="imgstretch">
          <img src="<?php echo web_root; ?>admin/adminMenu/images/message.svg"> 
         </div>
         <label>Message</label>
        </a>
      </div>
    </div> 
  </div>
  
  
</div>