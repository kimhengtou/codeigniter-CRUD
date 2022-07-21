<?php
function connect()
{
	return mysqli_connect("localhost","root","","kimheng");
	//$con = new mysqli("localhost","root","","kimheng");
}
function execute($link,$q)
{
	return mysqli_query($link,$q);
}
function num_rows($res)
{
	return mysqli_num_rows($res);
}
function fetch($res)
{
	return mysqli_fetch_assoc($res);
}