<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\RankRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RankRepository::class)
 * @ORM\Table(name="`rank`")
 */
class Rank
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
