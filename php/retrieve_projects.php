<?php

require 'classes/Database.php';
$conn = new DB();
$conn->retrieveProjects();