<div id="center">
	<h2>Гостевая книга</h2>
	<form action="" method="POST">
		<table noborder>
			<tr><td>Имя и фамилия</td><td><input type="text" name="name" required></td></tr>
			<tr><td>Электронная почта</td><td><input type="email" name="email" reduired></td></tr>
			<tr><td>Собственно, ваше обращение</td><td><textarea name="text"></textarea></td></tr>
			<Tr><td><input type="submit"></td></tr>
		</table>
	</form>
	<hr noshade>
	<table border=1>
		<h3>Сообщения:</h3>
		<?php
		foreach ($data as $key => $value) {
			echo "<tr><td>".$data[$key]->getName()."<br>".$data[$key]->getEmail()."</td><td>".$data[$key]->getMsg()."</td></tr>";
		}
		?>
	</table>
</div>