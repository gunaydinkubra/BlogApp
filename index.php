<?php
session_start();
ob_start();
include 'core/db.php';
include "core/b.php";
include 'core/session.php';
	b::request();
