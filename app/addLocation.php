<!DOCTYPE html>
<html>
<head>
  <?php 

    include('head.php'); 
    include('database.php');
    if(!isset($_SESSION['user_email'])) header('Location: index.php'); 

    $db = new database('admin');
    $events = $db->fetch('events');

    if(isset($_GET['updateDB']))
    {
      $db->addLocation($_GET['title'],$_POST['location']);
      header("Location: addLocation.php");
    }

  ?>

</head>
<body>
  <?php include 'navbar.php'; ?>
<div class="main">
  
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Date</th>
          <th scope="col">Location</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($events as $event): ?>
        <tr>
          <td><?php echo $event['title'] ?></td>
          <td><?php echo $event['start'] ?></td>
          <td>
            <form method="POST" action="addLocation.php?updateDB=true&title=<?php echo $event['title'] ?>">
              <input type="text" name="location" placeholder="ex: A-G-01" value="<?php echo $event['location'] ?>">
              <input type="submit" name="submit" value="update" class="btn btn-sm btn-outline-info">
            </form>
          </td>
        </tr>  
        <?php endforeach ?>
        
      </tbody>
    </table>

</div>
</body>
</html>