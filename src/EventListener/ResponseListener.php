<?php

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\ResponseEvent;

class ResponseListener
{
  public function onKernelResponse(ResponseEvent $event)
  {
    if (!$event->isMainRequest()) {
      // don't do anything if it's not the master request
      return;
    }

    $response = $event->getResponse();

    // Or set a single header
    $response->headers->set("Access-Control-Allow-Credentials", "true");
  }
}
