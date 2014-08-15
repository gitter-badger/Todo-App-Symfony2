<?php

namespace Kruno\Bundle\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{

    /**
     * @var string
     */
    private $slug;

    /**
     * @var integer
     */
    protected $id;


    /**
     * Set slug
     *
     * @param string $slug
     * @return User
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
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
