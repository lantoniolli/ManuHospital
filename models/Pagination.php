<?php

require_once(__DIR__ . '/../config/config.php');

//class pagination
class Pagination
{
    private $pdo;
    private $perPage;
    private $page;
    private $total;
    private $pages;
    private $start;

    public function __construct($pdo, $perPage = 5, $page = 1)
    {
        $this->pdo = $pdo;
        $this->perPage = $perPage;
        $this->page = $page;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function getPerPage()
    {
        return $this->perPage;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }
}