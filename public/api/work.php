<?php

require '../../app/common.php';

$taskId = intval ($_GET['taskId'] ?? 0);

if ($taskId < 1) {
  throw new Exception ('Invalid Task ID')
}
