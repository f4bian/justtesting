<?php

abstract class Service
{

}


class FacebookService extends Service
{
  public function getRedirectUri()
  {
    return 'uri';
  }
}

$facebook = new Service;
$facebook->getRedirectUri();
