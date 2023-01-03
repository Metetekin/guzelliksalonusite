<?php

function controller($controllerName){
  $controllerName = strtolower($controllerName);
  return PATH.'/app/controller/'.$controllerName.'.php';
}

function view($viewName){
  $viewName = strtolower($viewName);
  return PATH.'/app/views/'.$viewName;
}

function route($index){
  global $route;
  if( isset($route[$index]) ){
    return $route[$index];
  }else{
    return false;
  }
}

function site_url($url = false){
  return URL.'/'.$url;
}

function GetIP(){
  if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
  $ip = getenv("HTTP_CLIENT_IP");
  else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
  $ip = getenv("HTTP_X_FORWARDED_FOR");
  else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
  $ip = getenv("REMOTE_ADDR");
  else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
  $ip = $_SERVER['REMOTE_ADDR'];
  else
  $ip = "unknown";
  return($ip);
}
