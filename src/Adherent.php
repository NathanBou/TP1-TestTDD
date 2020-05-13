<?php

declare(strict_types=1);

final class Adherent
{
    private $nom;
    private $prenom;
    private $datenaissance;

    public function __construct(string $nom, string $prenom, string $datenaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaissance = $datenaissance;
    }
}
