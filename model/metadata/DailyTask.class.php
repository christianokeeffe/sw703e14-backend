<?php

class DailyTask {
	var $id;
	var $name;
	var $taskID;
	var $deadline;
	var $startTime;
	var $endTime;
	var $reward;
	var $penalty;

	function __construct($id, $name, $taskID, $deadline, $startTime, $endTime, $reward, $penalty)
	{
		$this->id = $id;
		$this->name = $name;
		$this->taskID = $taskID;
		$this->deadline = $deadline;
		$this->startTime = $startTime;
		$this->endTime = $endTime;
		$this->reward = $reward;
		$this->penalty = $penalty;
	}
}
?>