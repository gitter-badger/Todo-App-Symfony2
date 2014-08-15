<?php

namespace Kruno\Bundle\TodoBundle\Entity;

class Task
{

    /**
     * @var integer
     */
    private $priority;

    /**
     * @var string
     */
    private $taskName;

    /**
     * @var \DateTime
     */
    private $deadline;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set priority
     *
     * @param integer $priority
     * @return Task
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set taskName
     *
     * @param string $taskName
     * @return Task
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;

        return $this;
    }

    /**
     * Get taskName
     *
     * @return string 
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     * @return Task
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime 
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Task
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Task
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
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
