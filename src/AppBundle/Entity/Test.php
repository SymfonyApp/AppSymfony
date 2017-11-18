<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TestRepository")
 */
class Test
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="abc", type="string", length=255)
     */
    private $abc;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set abc
     *
     * @param string $abc
     *
     * @return Test
     */
    public function setAbc($abc)
    {
        $this->abc = $abc;

        return $this;
    }

    /**
     * Get abc
     *
     * @return string
     */
    public function getAbc()
    {
        return $this->abc;
    }
}

