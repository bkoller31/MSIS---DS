<?php

require '../../app/common.php';

$taskId = intval ($_GET['taskId'] ?? 0);  /*grab the integer value of task ID, but if it doesn't exist, use the value 0 instead */

if ($taskId < 1) {
  throw new Exception ('Invalid Task ID')
}

// 1. Go to the database and get all work associated with the $taskId
// 2. Convert to JSON
// 3. Print

/* This page is meant for the user to get a list of all the work
completed for a particular task */
