<?php

class View
{
    protected array $data = ['masterTemplate' => __DIR__ . '/../template/masterTemplate/mTemplate.php'];

    public function assign($data)
    {
        foreach ($data as $key => $value){
            $this->data[] = [$key => $value];
        }
    }

    public function getData() : array
    {
        return $this->data;
    }

    public function display()
    {
        include_once $this->data['masterTemplate'];
    }

}