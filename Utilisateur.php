    <?php

class Utilisateur {
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $ville;
    private $email;
    private $motDePasse;
    private $loisir;
    private $genre;

    public function __construct($nom, $prenom, $dateNaissance, $ville, $email, $motDePasse, $loisir, $genre) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->loisir = $loisir;
        $this->genre = $genre;
    }


    public function getValues() {
        return [
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'dateNaissance' => $this->dateNaissance,
            'ville' => $this->ville,
            'email' => $this->email,
            'motDePasse' => $this->motDePasse,
            'loisir' => $this->loisir,
            'genre' => $this->genre,
        ];
    }
}
