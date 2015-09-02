<?php

namespace GettyImages\Api\Request {

     class Events extends FluentRequest {
        
       protected function getRoute() {
          $route = "events";
          if(isset($this->eventId)){
            $route .= "/" .$this->eventId;
          }
          return $route;
        }
       
       private $eventId = null;
       
       public function withId($eventId){
         $this->eventId = $eventId;
         return $this;
       }
       
    }
}
