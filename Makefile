# Makefile professionnel pour un projet PHP d'apprentissage

SHELL := /bin/bash
PROJECT := MonProjet

.PHONY: help generate-code composer-install composer-update run clean

help:
	@echo "Usage: make [target]"
	@echo "---------------------------------"
	@echo "  help               Affiche ce message d'aide"
	@echo "  generate-code      Génère un snapshot de l'arborescence et du contenu des fichiers"
	@echo "  composer-install   Installe les dépendances via Composer (commande: composer install)"
	@echo "  composer-update    Met à jour les dépendances via Composer (commande: composer update)"
	@echo "  run                Lance le serveur PHP intégré"
	@echo "  clean              Nettoie les fichiers générés (code.txt, etc.)"

generate-code:
	@if ! command -v tree >/dev/null 2>&1; then \
		echo "Erreur : La commande 'tree' n'est pas installée."; \
		exit 1; \
	fi
	@{ \
	  echo "===== ARBORESCENCE DU PROJET ====="; \
	  tree -I 'vendor'; \
	  echo -e "\n===== DÉBUT DU CONTENU DES FICHIERS =====\n"; \
	  find . \( -name "code.txt" -o -name "Makefile" -o -path "*/.*" -o -path "./vendor" -o -name "composer.lock"  -prune \) -prune -o -type f -print0 | \
	  while IFS= read -r -d '' file; do \
	    echo "===== Contenu du fichier : $$file ====="; \
	    cat "$$file"; \
	    echo -e "\n"; \
	  done; \
	} > code.txt
	@echo "Le snapshot du code a été généré dans 'code.txt'."

composer-install:
	@echo "Installation des dépendances via Composer..."
	@if ! command -v composer >/dev/null 2>&1; then \
		echo "Erreur : Composer n'est pas installé. Veuillez l'installer depuis https://getcomposer.org/"; \
		exit 1; \
	fi
	@composer install

composer-update:
	@echo "Mise à jour des dépendances via Composer..."
	@if ! command -v composer >/dev/null 2>&1; then \
		echo "Erreur : Composer n'est pas installé. Veuillez l'installer depuis https://getcomposer.org/"; \
		exit 1; \
	fi
	@composer update

run:
	@echo "Lancement du serveur PHP intégré sur http://localhost:8000..."
	@php -S localhost:8000

clean:
	@echo "Nettoyage des fichiers générés..."
	@rm -f code.txt
	@echo "Nettoyage terminé."
