
<style>

    body {
    background-color: lavender;
    display:flex;
    flex-direction: column;
}

#wrapper { 
    width: 1000px;
    margin-left: auto;
    margin-right: auto;
}

#logo { 
        width: 100px;
        display: flex;
        float: left;
        height:auto;
        opacity: .7;

}

h1 {
    margin-top: 0px;
    margin-bottom: 10px;
    font-family: sans-serif;
    font-size: 6rem;
    background: linear-gradient(to right, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da, #43a047, #eeff41, #f9a825, #ff5722);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: right;
    display: flex;

}

h2 {
    margin-left:15px;
    margin-bottom:5px;
    font-size: 22px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    display:flex;
}

h3 {
    margin-top: 5px;
    margin-bottom: 15px;
    margin-left: 10px;
    font-size: 26px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    display: flex;
}

h4 {
    margin-top: 10px;
    margin-bottom: 5px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;    font-size: 26px;
    font-size: 20px;
    text-align: center;
}

p { 
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin-left: 10px;
    text-align: left;
    font-size: 14px;
    color: purple;
    font-weight: bold;
}

nav {
    display: flex;
    text-decoration: none;
    margin-bottom: 30px;
    margin-left: auto;
    /*background-color: cornflowerblue;*/
    /* background-image: linear-gradient(60deg, #E21143, #FFB03A);*/
    background-image: linear-gradient(to left, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da);
}

img{    
        width: 300px;
}


nav li {
    float: left;
    list-style-type: none;
    overflow:hidden;
    padding: 15px;
    margin: auto;
    text-decoration: none;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-size: 16px;
}

nav a {
    color: white;
    text-decoration: none;
}
a { 
    text-decoration: none;
}

a:hover {
    filter:drop-shadow(4px 4px 3px #7e57c2);
    background-color: pink;
    color:white;
    padding:5px;
    border-radius: 6px;
}

#warning {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #ef5350;
    font-size: large;
    margin-left: 10px;
    font-weight: bold;
    display: inline-flex;
}

#dimension {
    font-size: 14px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

label {
    font-size: 16px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#generate {
    background-color: #2196f3;
    color:white;
    padding:6px; 
    margin-bottom: 10px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:18px;
    display:inline-block;
    border-radius: 10px;
    font-size: 16px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#generate:hover {
    border:1px solid #7e57c2;
    filter:drop-shadow(4px 4px 3px #7e57c2);
}

#print {
    background-color: #2196f3;
    color:white;
    padding:6px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:18px;
    display:inline-block;
    border-radius: 10px;
    font-size: 16px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

#print:hover {
    border:1px solid #7e57c2;
    filter:drop-shadow(4px 4px 3px #7e57c2);
}

#error1, #error2 {
    font-family: Arial, Helvetica, sans-serif;
}


#colorcount {
    font-size: 14px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

input[type="button"], input[type="submit"] { 
    background-color: #2196f3;
    color:white;
    padding:6px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:18px;
    display:inline-block;
    border-radius: 10px;
} 

#submit:hover{
    border:1px solid #7e57c2;
    filter:drop-shadow(4px 4px 3px #7e57c2);
}

li a:hover {
    background-color: pink;
}

footer {
    background-image: linear-gradient(to right, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da);
    color: white;
    margin-top: auto;
    width: 100%;
    text-align: center;
    font-size: 14px;
    padding: 10px;
    bottom: 0;
    overflow:hidden;
    position: relative;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

#lowerTable tr td {
  height: 50px;
  width: 50px;
}

</style>

<!DOCTYPE html>
<html>
    <head>
	<title> Color Editor </title>
        <meta charset="UTC-16">
        <meta name="author" content="TODO: Insert later">
        <meta name="keywords" content="color picker, color, picker, cs312, web development">
        <meta name="description" content="Group Project Milestone 1">
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
    <!-- <h2>Color Editor</h2> -->
        <form method='POST'>
                
                <h3>Current Colors</h3>
                <p>To delete a color, simply check the color and click the button to delete. To add a color, add the color's name and associated hexcode value in the form below. To update a color, delete the former color and re-add the color with a new hex value.</p>
            <?php
                echo "<br>";
                foreach ($colors as $color) {
                $text = $color['text'];
                $colorID = $color['colorID'];
                echo "<input type='checkbox' value='$colorID' name='colorcheck[]'>";
                echo "&nbsp;";
                echo "<label>" . $text . "</label><br>";
            }
        ?>
            <br>

            <input type="submit" value="Delete colors" name="delete">
            <br>
            <br>
            <br>
            <h3>Add a Color</h3>
        </form>
        <form method="POST">
            <span>Color: </span><input type="text" name="colors_text"></input>
            <span>Hex: </span><input type="text" name="hex_text"></input>
            <input type='submit' value="Add new color" name='add'></input>
        </form>

            <footer> <strong>Created by Group #7</strong></footer>
</div>
</body>
</html>






