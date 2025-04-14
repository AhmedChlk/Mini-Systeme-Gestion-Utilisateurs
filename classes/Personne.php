<?php
namespace MonProjet;
class Personne implements JsonSerializable {
    public function __construct(
        private string $nom,
        private string $prenom,
        private string $email,
        private string $motDePasse,
        private DateTime $dateInscription,
        protected int|string $id
    ) {}

    public function toArray(): array {
        return [
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            // on évite d'exporter le mot de passe directement
            'dateInscription' => $this->dateInscription->format(DateTime::ATOM),
            'id' => $this->id
        ];
    }

    public function jsonSerialize(): mixed {
        return $this->toArray();
    }
}
?>

