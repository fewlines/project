<?php

return array(
	'h1' => 'fewlines',
	'text' => 'YEAH! - It\'s working...<br /><br />
			   Now you are ready too create your own project by using the following command (from the root directory): <br /><br />',
	'command' => './fewlines project:create [--activate] <id> <namespace> [<name>] [<description>]',
	'example' => array(
		'text' => 'Example:<br />',
		'command' => './fewlines project:create --activate yourproject "YourProject"'
	),
	'project' => array(
		'registered' => 'You have already registered at least 1 project. <br />
					     To activate a project use the following command:<br /><br />',
		'command' => './fewlines project:activate <id>',
		'example' => array(
			'text' => 'Example:<br />',
			'command' => './fewlines project:activate %s'
		)
	)
);