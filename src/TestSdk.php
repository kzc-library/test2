<?php

namespace Kzc\Test2;

class TestSdk
{
    protected  $data = [];

    public function setSdkVersion($version){
        $this->data['sdk_version'] = $version;
        return $this;
    }
    public function setSdkType($type){
        $this->data['sdk_type'] = $type;
        return $this;
    }
    public function getData()
    {
        return $this->data;
    }
}