<?php

namespace App\Entity\RV;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RV\GradeRepository")
 * @ORM\Table("rv_grades")
 */
class Grade implements SimpleTypeInterface
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="boolean")
     */
    private $deleted = false;

    public function __toString()
    {
        return (string)$this->getId();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function isDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
}