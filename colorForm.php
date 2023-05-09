<style>
	#notice {
		font-weight: bold;
		color: purple;
	}

	#form {
		margin: auto;
		text-align: center;
		text-decoration: underline;
		font-weight: bold;
		background-color: #ffe5ec;
		width: 40%;
		padding-top: 10px;
		padding-bottom: 10px;
		border: solid 5px pink;
		color: purple;
	}
</style>

<div id="notice">
	<p>In the fields below, please submit values for the number of colors you would like to paint with, and the size (rows/columns) of the table you will be coloring</p>
	<p>Please note that the number of colors entered should be a value between 1 and 10, and the size of your table should be a value between 1 and 26.</p>
</div>

<br>

<div id="form">
<?php
        echo Form::open(array(
                "action" => "index/spectrum/color",
                "method" => "get",
                "id" => "inputForm"
        ));

        echo Form::label('Table Dimensions:', 'dimensions');
        echo Form::input('dimensions');
        echo "<br>";
		echo "<br>";

        echo Form::label('Number of Colors:', 'colorcount');
        echo Form::input('colorcount');
        echo "<br>";
		echo "<br>";

        echo Form::submit();

        echo Form::close();

?>
</div>

<br><br>

<div id="formFailure">
<?php
     if(isset($error_msg) && ($error_msg != "")){
        echo "<p>";
        echo $error_msg;
        echo "</p>";
        //Change CSS of dimensions field
    }

?>
</div>

<div id="generatedTable">
<?php
    if(isset($table_view)){
                echo $table_view;
    }
?>
</div>
