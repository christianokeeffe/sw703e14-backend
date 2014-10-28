<?php

class OptionalTask {
	var $id;
	var $name;
	var $taskID;
	var $deadline;
	var $type;
	var $times;

	function __construct($id, $name, $taskID, $deadline, $type, $times)
	{
		$this->id = $id;
		$this->name = $name;
		$this->taskID = $taskID;
		$this->deadline = $deadline;
		$this->type = $type;
		$this->times = $times;
	}
}
?>