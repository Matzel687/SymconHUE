<?php

class HUEGroup extends IPSModule {

  public function Create() {
    parent::Create();
    $this->RegisterPropertyInteger("GroupId", 0);
  }

  public function ApplyChanges() {
    parent::ApplyChanges();
    $this->ConnectParent("{9C6FB2C8-0155-4A59-97A7-2F6D62608908}");
  }

  protected function GetBridge() {
    $instance = IPS_GetInstance($this->InstanceID);
    return ($instance['ConnectionID'] > 0) ? $instance['ConnectionID'] : false;
  }

}
