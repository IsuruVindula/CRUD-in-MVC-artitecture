<?php include 'headfoot/header.php'?>

<div class="container">
    <h1>Register</h1>
    <?php if($this->session->flashdata('msg'))
    {
        echo "<h3>".$this->session->flashdata('msg')."</h3>";
    }
    ?>
    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Register/Registeruser '); ?>

<div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="first name" name="fname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="last name" name="lname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <fieldset>
          <legend>Select the type</legend>
             <select name="type">
              <option></option>
              <option value = "customer">Customer</option>
              <option value = "artist">Artist</option>
             </select>
          </p>
    </fieldset>
  <div class="form-group">
    <label for="subject">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="subject">Re-enter Password</label>
    <input type="password" class="form-control" placeholder="Password" name="passwordagain">
  </div>

  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-default">Signup</button>
    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
  </div>
    <?php echo form_close(); ?>

</div>

<?php include 'headfoot/footer.php'?>