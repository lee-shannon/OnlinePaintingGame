<!DOCTYPE html>
<html>
    <head>
	<title> <?php echo $title ?> </title>
        <meta charset="UTC-16">
        <meta name="author" content="TODO: Insert later">
        <meta name="keywords" content="color picker, color, picker, cs312, web development">
        <meta name="description" content="Group Project Milestone 1">
        <?php echo Asset::css($css) ?>
    </head>
    <body>
	<div id="wrapper">
		<img id="logo" src="https://www.transparentpng.com/thumb/unicorn/I5APeU-unicorn-cute-unicorn-svg-cut-file-scrapbook-cut-file-cute.png">

        <header>
            <h1 id="companyName">Spectrum</h1>
        </header>
        <nav>
            <li><a href="index">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="color">Color Coordinate Generation</a></li>
		<li><a href="data">Edit Painting Colors</a></li>
        </nav>
	<main>
            <?php echo $content ?>
            <footer> <strong>Created by Group #7</strong></footer>
</div>
</body>
</html>
