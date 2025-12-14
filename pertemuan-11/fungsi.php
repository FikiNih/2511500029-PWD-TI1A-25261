<?php
function redirrect($url)
{
  header("Location: " . $url);
  exit();
}