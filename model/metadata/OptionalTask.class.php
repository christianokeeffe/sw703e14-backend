<?php

class OptionalTask {
	var $id;
	var $name;
	var $taskID;
	var $deadline;
	var $type;
	var $times;
	var $reward;

	function __construct($id, $name, $taskID, $deadline, $type, $times, $reward)
	{
		$this->id = $id;
		$this->name = $name;
		$this->taskID = $taskID;
		$this->deadline = $deadline;
		$this->type = $type;
		$this->times = $times;
		$this->reward = $reward;
	}
}
?>