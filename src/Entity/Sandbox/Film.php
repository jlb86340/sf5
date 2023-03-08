<?php

namespace App\Entity\Sandbox;

use App\Repository\Sandbox\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'sb_films')]
#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $titre = null;

    #[ORM\Column]
    // le parametre "name" n'est pas precise, le nom du champ sera celui du membre : "annee"
    // le parametre "type" n'est pas precise, ce sera celui correspondant a'int' : "integer"
    private ?int $annee = null;

    #[ORM\Column(name: 'enstock', type: 'boolean')]
    // parametre "name" inutile ici, car c'est deja la valeur par defaut (c'est pour l'exemple)
    // idem pour le parametre "type"
    private ?bool $enstock = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantite = null;


    /**
     * Film constructor
     */
    public function __construct()
    {
        $this->enstock = true;
        $this->quantite = null;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function isEnstock(): ?bool
    {
        return $this->enstock;
    }

    public function setEnstock(bool $enstock): self
    {
        $this->enstock = $enstock;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
