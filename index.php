<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>jQuery Ajax test</title>
		<script src="jquery-1.8.2.min.js" type="text/javascript"></script>
	</head>
	<body>
<input type="button" id="ping" value="PING">
<script>
ping = function() {
	$.get(
		'teste_ajax.php',
		{ping: 1},
		function(data) {
			alert(data);
		}
	);
}

$('#ping').click(function() {
	ping();
});
</script>​
	</body>
</html>
