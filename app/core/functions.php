<?php 

/** Display content (assessment only) */
function display($content)
{
	echo "<pre>";
	print_r($content);
	echo "</pre>";
}

function escape($str)
{
	return htmlspecialchars($str);
}


function redirect($path)
{
	header("Location: " . ROOT."/".$path);
	die;
}