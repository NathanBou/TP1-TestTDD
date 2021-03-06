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
        if (strpos($prenom, '-') !== false) {
            $prenom = str_replace('-', ' ', $prenom);
        }
        $concat = $nom . " " . $prenom . " " . $datenaissance;
        $this->identifiantNormalise = strtolower($concat);
    }

    public function getIdentifiantNormalise(): string
    {
        return $this->identifiantNormalise;
    }
}
