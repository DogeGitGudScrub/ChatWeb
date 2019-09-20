			<?php
				session_start();
				unset($_SESSION['log_name']);
				unset($_SESSION['log_pw']);
				session_destroy();

				header("Location: login.php");
				exit;
			?>
