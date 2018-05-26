<?php include_once 'header.php'; ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->persons as $person) : ?>
      <?php $adult = $person['adult'] ? 'adult' : 'child'; ?>
        <tr scope="row">        
          <td><a href="/<?php echo $adult; ?>/<?php echo $person['id'] ?>"><?php echo $person['id'] ?></a></td>
          <td>
            <a href="/<?php echo $adult; ?>/<?php echo $person['id'] ?>"><?php echo $person['firstname'] . ' ' . $person['lastname']; ?></a>
          </td>          
          <td>
            <a href="/delete/<?php echo $adult . '/' . $person['id'] ?>">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>


<?php include_once 'footer.php'; ?>