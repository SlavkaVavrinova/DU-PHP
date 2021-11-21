<?php

function insertContact(array $contacts) : string
 {
  $contactList = "";
  foreach($contacts as $contact){

    $contactList .='
    <div class="col-lg-4">
    <div class="contact-box">
      <a class="row" href="#">
        <div class="col-4">
          <div class="text-center">
            <img alt="image" class="rounded-circle m-t-xs img-fluid"
              src="./src/' .$contact['src'].'.png"/>
              <div class="m-t-xs font-bold">'.$contact['workPosition'].'
              </div>
          </div>
        </div>
        <div class="col-8">
          <h3><strong>'.$contact['name'].'</strong></h3>
            <address>
              <i class="fa fa-map-marker"></i>'.$contact['address'].'
            </address>
        </div>
      </a>
    </div>
    </div>';
  }
  return $contactList;
};

?>