<?php

namespace Hateoas;

use JMS\Serializer\Annotation\SerializedName;

/**
 * @author William Durand <william.durand1@gmail.com>
 */
class Collection
{
    /**
     * @var array
     */
    private $resources;

    /**
     * @SerializedName("_links")
     * @var array
     */
    private $links;

    /**
     * @var int
     */
    private $total;

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var string
     */
    private $rootName;

    public function __construct($rootName = null, array $resources = array(), array $links = array(), $total = null, $page = null, $limit = null)
    {
        $this->rootName  = $rootName;
        $this->resources = $resources;
        $this->links     = $links;
        $this->total     = $total;
        $this->page      = $page;
        $this->limit     = $limit;
    }

    /**
     * @return array
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return string
     */
    public function getRootName()
    {
        return $this->rootName;
    }

    /**
     * @param  Link     $link
     * @return Resource
     */
    public function addLink(Link $link)
    {
        if (!in_array($link, $this->links)) {
            $this->links[] = $link;
        }

        return $this;
    }
}
