<?php
class Personnage
{
    private string $nom;
    private string $img;
    private int $age;
    private bool $sexe;
    private int $force;
    private int $agilite;

    const HOMME = true;
    const FEMME = false;
    const FORCE_MAX =9;
    const FORCE_MED = 6;
    const FORCE_MIN = 3;

    //Constructor
    public function __construct($nom2, $img, $age, $sexe, $force, $agilite)
    {
        $this->nom = $nom2;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
    }

    // Getter et Setter

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return bool
     */
    public function getSexe(): bool
    {
        return $this->sexe;
    }

    /**
     * @return int
     */
    public function getForce(): int
    {
        return $this->force;
    }

    /**
     * @return int
     */
    public function getAgilite(): int
    {
        return $this->agilite;
    }
    //////// Les SETTERS
    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @param bool $sexe
     */
    public function setSexe(bool $sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @param int $force
     */
    public function setForce(int $force): void
    {
        $this->force = $force;
    }

    /**
     * @param int $agilite
     */
    public function setAgilite(int $agilite): void
    {
        $this->agilite = $agilite;
    }

    // ajouter la fonction affichage des informations du personnage

    public function afficherInfos()
    {
        echo '<b>Nom : </b> ' . $this->nom . '</br>';
        echo '<b>Age : </b> ' . $this->age . '</br>';
        echo '<b>Sexe : </b> ';
        if ($this->sexe) {
            echo 'Homme</br>';
        } else {
            echo 'Femme</br>';
        }
        echo '<b>Force : </b> ' . $this->force . '</br>';
        echo '<b>Agilité : </b> ' . $this->agilite . '</br>';
    }
    // Affichage image et infos perso
    public function afficherInfosTemplate()
    {
        echo "<div class='gauche'>";
        echo "<img src = 'sources/images/" . $this->img . "' alt = 'player " . $this->nom . "' />";
        echo "</div>";
        echo "<div class='gauche'>";
        $this->afficherInfos();
        echo "</div>";
    }
}
