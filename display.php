<html>

<head>
<title>Login1 Example / Display Page</title>
<style>
body  { font-family:Verdana;
        color:maroon;
        background-color:aliceblue; }
</style>
</head>

<body>

<h1>Login1 Example / Display Page</h1>

<h2>Textbox Variables</h2>

<p>
Username: <?php echo $_POST["username"]; ?> <br />
Password: <?php echo $_POST["passwd"];   ?>
</p>

<h2>$_POST Array</h2>

<pre>
<?php print_r($_POST); ?>
</pre>

</body>
</html>
