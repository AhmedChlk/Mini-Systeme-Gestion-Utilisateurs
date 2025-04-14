<?php

interface Exportable {
    public function exporter(): string;
}

trait Logger{
	public function log(string $message): void {
		$now = (new DateTime())->format('Y-m-d H:i:s');
		echo "[LOG] ($now) : $message\n";
	}
}
class Personne implements JsonSerializable {
    public function __construct(
        private string $nom,
        private string $prenom,
        private string $email,
        private string $motDePasse,
        private DateTime $dateInscription,
        protected int|string $id
    ) {}

    public function jsonSerialize(): mixed {
        return [
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'motDePasse' => $this->motDePasse,
            'dateInscription' => $this->dateInscription->format(DateTime::ATOM),
            'id' => $this->id
        ];
    }
}
class User extends Personne implements Exportable, JsonSerializable {
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

    public function jsonSerialize(): mixed {
        return array_merge(parent::jsonSerialize(), [
            'niveauAcces' => $this->niveauAcces
        ]);
    }

    public function exporter(): string {
	$this->log("JSON du User {$this->id}");    
        return json_encode($this, JSON_PRETTY_PRINT);
    }
}

class Admin extends Personne implements Exportable, JsonSerializable {
    public function __construct(
        string $nom,
        string $prenom,
        string $email,
        string $motDePasse,
        DateTime $dateInscription,
        int|string $id,
        public int $niveauAcces = 2
    ) {
        parent::__construct($nom, $prenom, $email, $motDePasse, $dateInscription, $id);
    }

    public function jsonSerialize(): mixed {
        return array_merge(parent::jsonSerialize(), [
            'niveauAcces' => $this->niveauAcces
        ]);
    }

    public function exporter(): string {
        return json_encode($this, JSON_PRETTY_PRINT);
    }
}

// Test

$user = new User(
    "Doe",
    "Jane",
    "jane@example.com",
    "secret",
    new DateTime(),
    123
);

echo $user->exporter();

