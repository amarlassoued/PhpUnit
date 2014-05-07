# features/produit.feature
Feature: Acheter un produit
  In order to acheter un produit
  As a client
  I need to être connecté
Scenario: Un client ajoute {nb} produit au panier
  Given le client est sur la page d'accueil
  When le client choisit un produit
  Then le produit est dans son panier
