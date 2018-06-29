<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 30.06.2018
 * Time: 1:37
 */?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="template/css/style.css">
</head>
<body>
	<div class="header">
		<form action="index.php">
		</form>
	</div>
	<div class="body">

			<div class="body">
				<div id="content">
					<div>
						<div>
                            <?php foreach ($newsList as $newsItem):?>
    <h3><a href="/news/<?php echo $newsItem['id']?>"><?php echo $newsItem['title']?></a></h3>
    <p><?php echo $newsItem['short_content']?></p>
    <p>
        <br><?php echo $newsItem['date']?>
    </p>

<?php endforeach; ?>
</div>
</div>
</div>
</div>
</div>
<div>
    <div>
        <h3>Cooking Video</h3>
        <a href="videos.html"><img src="images/cooking-video.png" alt="Image"></a>
        <span>Vegetable &amp; Rice Topping</span>
    </div>
    <div>
        <h3>Featured Recipes</h3>
        <ul id="featured">
            <li>
                <a href="recipes.html"><img src="images/sandwich.jpg" alt="Image"></a>
                <div>
                    <h2><a href="recipes.html">Ham Sandwich</a></h2>
                    <span>by: Anna</span>
                </div>
            </li>
            <li>
                <a href="recipes.html"><img src="images/biscuit-and-coffee.jpg" alt="Image"></a>
                <div>
                    <h2><a href="recipes.html">Biscuit &amp; Sandwich</a></h2>
                    <span>by: Sarah</span>
                </div>
            </li>
            <li>
                <a href="recipes.html"><img src="images/pizza.jpg" alt="Image"></a>
                <div>
                    <h2><a href="recipes.html">Delicious Pizza</a></h2>
                    <span>by: Rico</span>
                </div>
            </li>
        </ul>
    </div>
    <div>
        <h3>Blog</h3>
        <ul id="blog">
            <li>
                <a href="index.php">This is just a place holder, so you can see what the site would look like.</a>
                <span class="date">Jan 9, by Liza</span>
            </li>
            <li>
                <a href="index.php">This is just a place holder, so you can see what the site would look like.</a>
                <span class="date">Feb 16, by Myk</span>
            </li>
            <li>
                <a href="index.php">This is just a place holder, so you can see what the site would look like.</a>
                <span class="date">March 15, by Xaxan</span>
            </li>
        </ul>
    </div>

</div>
</div>
<div class="footer">

</div>
</body>
</html>