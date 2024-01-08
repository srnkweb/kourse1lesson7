<?php
class Index
{
    protected array $data =
    [
        [
            'body'  => '/css/styles_structure/index/body.css',
            'head'  => '/css/styles_structure/index/head.css',
            'content' => '/css/styles_structure/index/content.css',
            'footer' => '/css/styles_structure/index/footer.css'
        ],
        [
             'head' => '/../index/head.php',
             'content' => '/../index/content.php',
             'footer' => '/../index/footer.php'
        ]
    ];

    public function getData()
    {
        return $this->data;
    }
}