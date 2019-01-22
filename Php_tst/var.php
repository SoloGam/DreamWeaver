<?php
 if (isset($_POST['text'])) {
	 echo ($_POST['text']);
	 echo '<br>';
	 print_r(str_word_count(($_POST['text']), 0));
	 echo '<br>';
	 print_r(str_word_count(($_POST['text']), 1));
 }
?>