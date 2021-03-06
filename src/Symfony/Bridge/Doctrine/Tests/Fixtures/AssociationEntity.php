<?php

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class AssociationEntity
{
    /**
     * @var int
     * @ORM\Id @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="SingleIdentEntity")
     * @var \Symfony\Bridge\Doctrine\Tests\Form\Fixtures\SingleIdentEntity
     */
    public $single;

    /**
     * @ORM\ManyToOne(targetEntity="CompositeIdentEntity")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="composite_id1", referencedColumnName="id1"),
     *  @ORM\JoinColumn(name="composite_id2", referencedColumnName="id2")
     * })
     * @var \Symfony\Bridge\Doctrine\Tests\Form\Fixtures\CompositeIdentEntity
     */
    public $composite;
}
