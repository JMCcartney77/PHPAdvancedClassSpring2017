<br />
<!Add link to this page-->
<div class="container">
    <h1>Add Address</h1>
    <form action="#" method="post"> <!-- "#" places on the same page-->  
       Full Name: <input name="fullname" value="<?php echo $fullname; ?>" class="form-control" /> <br />
       Address: <input name="addressline1" value="<?php echo $addressline1; ?>" class="form-control" /> <br />
       Email: <input name="email" value="<?php echo $email; ?>" class="form-control" /> <br />
       City: <input name="city" value="<?php echo $city; ?>" class="form-control" /> <br />
       State: 
       <select name="state" class="btn btn-primary dropdown-toggle form-control">
            <?php foreach ($states as $key => $value): ?> 
              <option value="<?php echo $key; ?>" <?php if ( $state == $key ): ?> selected="selected"  <?php endif; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
          </select>
       <br>
       Zip: <input name="zip" value="<?php echo $zip; ?>" class="form-control" /> <br />
       Birthday: <input type="date" name="birthday" value="<?php echo $birthday; ?>" class="form-control" /> <br />
       <input type="submit" value="submit" class="btn btn-primary" />
       <div class="nav">Click <a href="./index.php">here</a> to view addresses.</div>
    </form>
</div><butt