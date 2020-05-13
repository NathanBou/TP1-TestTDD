<?php

declare(strict_types=1);

final class Adherent
{
    private $nom;
    private $prenom;
    private $datenaissance;
    private $identifiantNormalise;

    public function __construct(string $nom, string $prenom, string $datenaissance)
    {
        $this->normaliser($nom, $prenom, $datenaissance);
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaissance = $datenaissance;
    }

    public function normaliser(string $nom, string $prenom, string $datenaissance)
    {
        $this->identifiantNormalise = "";
    }

    public function getIdentifiantNormalise(): string
    {
        return $this->identifiantNormalise;
    }
}
