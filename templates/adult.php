<?php include_once 'header.php'; ?>

  <?php $person = $this->person; ?>
  <div class="container">
    <div class="row">    
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-lg-3 offset-md-3">
        <h1><?php echo $person['firstname'] . ' ' . $person['lastname']; ?></h1>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row">Gender</th>
              <td><?php echo $person['gender']; ?></td>
            </tr>
            <tr>
              <th scope="row">Age</th>
              <td><?php echo $person['age']; ?></td>
            </tr>
            <tr>
              <th scope="row">City</th>
              <td><?php echo $person['city']; ?></td>
            </tr>
            <tr>
              <th scope="row">Address</th>
              <td><?php echo $person['address']; ?></td>
            </tr>
            <tr>
              <th scope="row">State</th>
              <td><?php echo $person['state']; ?></td>
            </tr>
            <tr>
              <th scope="row">Work</th>
              <td><?php echo $person['work']; ?></td>
            </tr>
            <tr>
              <th scope="row">Education</th>
              <td><?php echo $person['education']; ?></td>
            </tr>
            <tr>
              <th scope="row">Marrige Status</th>
              <td><?php echo $person['marrigeStatus']; ?></td>
            </tr>
            <tr>
              <th scope="row">Kids</th>
              <td><?php echo $person['kids']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<?php include_once 'footer.php'; ?>