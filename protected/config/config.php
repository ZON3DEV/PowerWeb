<?php
$config = array(
	// Website Database Information
	'hostWeb' => 'localhost',			// Database Adress
	'dbnameWeb' => 'pow',				// DB Name
	'userWeb' => 'root',				// User
	'passWeb' => 'changme',				// Password

	// Forum Information
	'hostForum' => 'localhost',			// Database Adress
	'dbnameForum' => 'forum',			// DB Name
	'userForum' => 'root',				// User
	'passForum' => 'changme',			// Password
	'prefixForum' => '',				// Table Prefix

	// Login Server Information
	'hostLs' => 'localhost',			// Database Adress
	'dbnameLs' => 'al_server_ls',			// DB Name
	'userLs' => 'root',				// User
	'passLs' => 'changme',				// Password

	// Game Server Information
	'hostGs' => 'localhost',			// Database Adress
	'dbnameGs' => 'al_server_gs',			// DB Name
	'userGs' => 'root',				// User
	'passGs' => 'changme',				// Password

	// General Settings
	'url' => 'http://localhost/',			// Website Address (Slash at the End is Required)
	'theme' => 'light',				// Theme
	'lang' => 'en',					// Language
	'caching' => 'CFileCache',			// Caching (CFileCache - Files, CDbCache - SQLite, CDummyCache - Disabled)
);

$params = array(
	'lsIp' => 'localhost',				// Login Server Server IP
	'lsPort' => '2106',				// Port
	'gsIp' => 'localhost',				// Game Server Server IP
	'gsPort' => '7777',				// Port
);
