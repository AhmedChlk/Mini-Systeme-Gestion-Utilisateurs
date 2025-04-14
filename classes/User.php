<?php
namespace MonProjet;
class User extends Personne implements Exportable {
    use Logger;

    public function __construct(
        string $nom,
        string $prenom,
        string $email,
        string $motDePasse,
        DateTime $dateInscription,
        int|string $id,
        public int $niveauAcces = 1
    ) {
        parent::__construct($nom, $prenom, $email, $motDePasse, $dateInscription, $id);
    }

    public function toArray(): array {
        return array_merge(parent::toArray(), [
            'niveauAcces' => $this->niveauAcces
        ]);
    }

    public function exporter(): string {
        $this->log("Exportation de l'utilisateur {$this->toArray()['id']}");
        return json_encode($this->toArray(), JSON_PRETTY_PRINT);
    }
}
?>

