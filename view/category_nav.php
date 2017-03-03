<nav>
    <ul>
      <?php foreach($categories as $category) : ?>
	 <li>
	   <a href="?category_id=<?php echo $category['categoryID']; ?>"><?php echo $category['categoryName']; ?>
	 </li>
	 <?php endforeach; ?>
    </ul>
</nav>
