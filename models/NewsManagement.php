<?php

class NewsManagement
{
    protected array $data =
    [
        [
           'body'  => '/css/styles_structure/newsManagement/body.css',
           'head'  => '/css/styles_structure/newsManagement/head.css',
           'content' => '/css/styles_structure/newsManagement/content.css',
           'footer' => '/css/styles_structure/newsManagement/footer.css',
           'subContent' => '',
           'subFooter' => '',
           'subHead'   => ''
        ],
        [
           'head' => '/../newsManagement/head.php',
           'content' => '/../newsManagement/content.php',
           'footer' => '/../newsManagement/footer.php'
        ],
        [
            'forMenu' => '',
            'forForm' => ''
        ]
    ];

    public function getData()
    {
        return $this->data;
    }
    public function contentCreateNews()
    {

    }

    public function setContentForMenu($forMenu)
    {
        $this->data[2]['forMenu'] = $forMenu;
    }

    public function setContentForForm($forForm)
    {
        $this->data[2]['forForm'] = $forForm;
    }

    public function setCssStyles($subContent, $subFooter, $subHeader)
    {
        $this->data[0]['subContent'] = $subContent;
        $this->data[0]['subFooter'] = $subFooter;
        $this->data[0]['subHead'] = $subHeader;
    }
}