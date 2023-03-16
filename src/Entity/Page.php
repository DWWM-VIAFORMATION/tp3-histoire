<?php

namespace App\Entity;

use App\Repository\PageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PageRepository::class)]
class Page
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numPage = null;

    #[ORM\Column(length: 255)]
    private ?string $nomFichier = null;

    #[ORM\Column(length: 255)]
    private ?string $texte = null;

    #[ORM\ManyToOne(inversedBy: 'pages')]
    private ?Histoire $histoire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumPage(): ?int
    {
        return $this->numPage;
    }

    public function setNumPage(int $numPage): self
    {
        $this->numPage = $numPage;

        return $this;
    }

    public function getNomFichier(): ?string
    {
        return $this->nomFichier;
    }

    public function setNomFichier(string $nomFichier): self
    {
        $this->nomFichier = $nomFichier;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getHistoire(): ?Histoire
    {
        return $this->histoire;
    }

    public function setHistoire(?Histoire $histoire): self
    {
        $this->histoire = $histoire;

        return $this;
    }
}
