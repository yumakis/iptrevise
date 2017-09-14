<?php
/**
 * This file is part of the IP-Trevise Application.
 *
 * PHP version 7.1
 *
 * (c) Alexandre Tranchant <alexandre.tranchant@gmail.com>
 *
 * @category Entity
 *
 * @author    Alexandre Tranchant <alexandre.tranchant@gmail.com>
 * @copyright 2017 Cerema — Alexandre Tranchant
 * @license   Propriétaire Cerema
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait ReferentTrait.
 *
 * @category Entity
 *
 * @author  Alexandre Tranchant <alexandre.tranchant@gmail.com>
 * @license Cerema 2017
 */
trait ReferentTrait
{
    /**
     * Creator of the linked entity.
     *
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User", fetch="EAGER")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="usr_id")
     */
    protected $creator;

    /**
     * @return User
     */
    public function getCreator(): ?User
    {
        return $this->creator;
    }

    /**
     * Setter of the creator.
     *
     * @param User $creator
     *
     * @return ReferentTrait
     */
    public function setCreator(User $creator)
    {
        $this->creator = $creator;

        return $this;
    }
}
