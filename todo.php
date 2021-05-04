<?php

require_once 'app/init.php';
$itemsQuery = $db->prepare("
     SELECT id,name,done
     FROM  items 
     WHERE user= :user
");

 $itemsQuery->execute([
  'user'=>$_SESSION['user_id']
 ]);

$items = $itemsQuery->rowCount() ? $itemsQuery:[];
  
/*foreach($items as $item){
	/*print_r($item);
}*/


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>TO DO </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="3.css">
    
   
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
<link rel="stylesheet" href="todocss.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Eventin'</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="afterlogin.php">Home</a>
        </li>
        
        
      
    </div>
  </div>
</nav>

	<div class="list">
		<h1 class="header">To do. </h1>

		<?php if(!empty($items)):?>

		<ul class="items">
			<?php foreach($items as $item):?>
			    <li>
			    	<span class="item"><?php echo $item['name'];?><?php echo $item['done'] ? ' done' : '' ?></span>
				<?php if(!$item['done']):?>
                    <a href="mark.php?as=done&item=<?php echo $item['id'] ; ?>" style="background-color:LightGray"class="done-button" >Mark as done</a>
                <?php endif; ?>
               </li>
                <?php endforeach;?>
			</ul>
			<?php else:?>
				<p>You haven't added any items yet</p>
		<?php endif; ?>
		<form class="item-add" action="add.php" method="post">
			<input type="text" name="name" placeholder="TYPE A NEW ITEM HERE." class="input" autocomplete="off"required>
			<input type="submit" value="Add" class="submit">
		</form>
 

</div>
</body>
</html>