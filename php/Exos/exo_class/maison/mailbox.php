<?php

class Mailbox{
    protected $support;
    protected $type;

  
    public function getSupport()
    {
        return $this->support;
    }


    public function setSupport($support)
    {
        $this->support = $support;

        return $this;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}