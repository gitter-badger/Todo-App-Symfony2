<?php

namespace Kruno\Bundle\TodoBundle\Entity;

class Lists
{

    /**
     * @var string
     */
    private $listName;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set listName
     *
     * @param string $listName
     * @return Lists
     */
    public function setListName($listName)
    {
        $this->listName = $listName;

        return $this;
    }

    /**
     * Get listName
     *
     * @return string 
     */
    public function getListName()
    {
        return $this->listName;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
