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

function displayMessage($message)
{
    if ($message['error']) {
        echo '<div class="alert alert-warning">' . $message['message'] . '</div>';
    } else {
        echo '<div class="alert alert-success">' . $message['message'] . '</div>';
    }
}