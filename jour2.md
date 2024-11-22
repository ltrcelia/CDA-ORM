## **Semaine 1 : Persistance des Données et Sécurité**

### **Jour 2 : Transformation du MCD en MLD et Mise en Place de la Base de Données**

---

### **Objectifs de la Journée**

1. **Transformer le Modèle Conceptuel de Données (MCD) en Modèle Logique de Données (MLD) :**
   - Comprendre les étapes de la transformation.
   - Appliquer les règles de normalisation pour optimiser le MLD.

2. **Mise en Place de la Base de Données Relationnelle :**
   - Installer et configurer un Système de Gestion de Base de Données Relationnelle (SGBDR) tel que MySQL ou PostgreSQL.
   - Créer les schémas de base de données à partir du MLD.
   - Implémenter les tables, les relations et les contraintes d’intégrité.

3. **Appliquer les Recommandations de Sécurité dans la Gestion des Bases de Données :**
   - Configurer les permissions et les accès.
   - Mettre en place des mesures de sécurité pour protéger les données.

4. **Développer des Compétences Pratiques :**
   - Créer une base de données relationnelle basée sur le MLD.
   - Exécuter des scripts SQL pour définir les structures de la base de données.

---

### **Planning de la Journée**

| **Horaires**    | **Activité**                                                                                           |
|-----------------|--------------------------------------------------------------------------------------------------------|
| 09:00 - 10:30   | Transformation du MCD en MLD (Modèle Logique de Données)                                               |
| 10:30 - 10:45   | Pause                                                                                                  |
| 10:45 - 12:00   | Normalisation des Données et Optimisation du MLD                                                       |
| 12:00 - 13:00   | Pause déjeuner                                                                                         |
| 13:00 - 14:30   | Installation et Configuration du SGBDR (MySQL/PostgreSQL)                                              |
| 14:30 - 14:45   | Pause                                                                                                  |
| 14:45 - 16:15   | Création des Schémas de Base de Données à partir du MLD                                                |
| 16:15 - 17:30   | Atelier Pratique : Implémentation de la Base de Données et Configuration des Permissions               |

---

### **Détail des Sessions**

#### **09:00 - 10:30 : Transformation du MCD en MLD (Modèle Logique de Données)**

**Objectifs :**
- Apprendre les étapes de transformation du MCD en MLD.
- Comprendre comment convertir les entités, les associations et les attributs en structures relationnelles.

**Contenu Théorique :**

1. **Introduction au MLD :**
   - **Définition :** Représentation des données sous forme de tables relationnelles prêtes à être implémentées dans un SGBDR.
   - **Objectif :** Traduire le MCD en structures optimisées pour le stockage et la gestion des données.

2. **Étapes de Transformation :**
   - **Conversion des Entités en Tables :** Chaque entité du MCD devient une table dans le MLD.
   - **Conversion des Associations en Relations :**
     - **Un-à-Un (1:1) :** Ajouter une clé étrangère dans l'une des tables ou fusionner les tables.
     - **Un-à-Plusieurs (1:N) :** Ajouter une clé étrangère dans la table du côté "plusieurs".
     - **Plusieurs-à-Plusieurs (N:M) :** Créer une table intermédiaire (table de jointure) avec des clés étrangères référant les deux tables principales.
   - **Conversion des Attributs :** Les attributs deviennent des colonnes dans les tables correspondantes.

3. **Exemples Pratiques :**
   - **Transformation d’un MCD de Bibliothèque en MLD :**
     - **Entités :** `Livre`, `Auteur`, `Membre`, `Emprunt`.
     - **Tables Correspondantes :** Création de tables `Livre`, `Auteur`, `Membre`, `Emprunt` avec les clés primaires et étrangères appropriées.
   - **Transformation d’un MCD de Magasin en Ligne en MLD :**
     - **Entités :** `Produit`, `Catégorie`, `Client`, `Commande`, `Paiement`.
     - **Tables Correspondantes :** Création des tables avec les relations définies via les clés étrangères.

**Exercices Guidés :**

1. **Exercice 1 : Transformation d’une Entité**
   - **Consigne :** Transformer l’entité `Produit` du MCD du magasin en ligne en une table dans le MLD. Définir les colonnes et la clé primaire.
   - **Solution Attendue :**
     ```sql
     CREATE TABLE Produit (
         Produit_ID INT PRIMARY KEY,
         Nom VARCHAR(100),
         Description TEXT,
         Prix DECIMAL(10, 2),
         Stock INT,
         Categorie_ID INT,
         FOREIGN KEY (Categorie_ID) REFERENCES Categorie(Categorie_ID)
     );
     ```

2. **Exercice 2 : Conversion d’une Association Plusieurs-à-Plusieurs**
   - **Consigne :** Transformer l’association entre `Commande` et `Produit` en relation dans le MLD.
   - **Solution Attendue :** Création d’une table `Commande_Produits` avec les clés étrangères `Commande_ID` et `Produit_ID`.
     ```sql
     CREATE TABLE Commande_Produits (
         Commande_ID INT,
         Produit_ID INT,
         PRIMARY KEY (Commande_ID, Produit_ID),
         FOREIGN KEY (Commande_ID) REFERENCES Commande(Commande_ID),
         FOREIGN KEY (Produit_ID) REFERENCES Produit(Produit_ID)
     );
     ```

**Transition vers la Session Suivante :**
- Présentation des résultats des exercices.
- Discussion sur les difficultés rencontrées et clarification des concepts.

---

#### **10:30 - 10:45 : Pause**

---

#### **10:45 - 12:00 : Normalisation des Données et Optimisation du MLD**

**Objectifs :**
- Comprendre les principes de la normalisation des bases de données.
- Appliquer les formes normales pour optimiser le MLD.

**Contenu Théorique :**

1. **Introduction à la Normalisation :**
   - **Définition :** Processus d’organisation des données pour minimiser la redondance et éviter les anomalies de mise à jour.
   - **Objectifs :** Assurer l’intégrité des données et améliorer l’efficacité des requêtes.

2. **Les Formes Normales :**
   - **Première Forme Normale (1NF) :**
     - **Critères :** Chaque table doit avoir des valeurs atomiques et chaque enregistrement doit être unique.
     - **Exemple :** Une table sans groupes répétitifs.
     - "Les transactions sont souvent composées de plusieurs instructions. L'atomicité garantit que chaque transaction est traitée comme une seule "unité", qui réussit complètement ou échoue complètement : si l'une des déclarations constituant une transaction échoue, la transaction entière échoue et la base de données reste inchangée. Un système atomique doit garantir l'atomicité dans toutes les situations, y compris les pannes de courant, les erreurs et les crashs3. Une garantie d'atomicité empêche que les mises à jour de la base de données ne se produisent que partiellement, ce qui peut causer des problèmes plus importants que le rejet pur et simple de toute la série. En conséquence, la transaction ne peut pas être observée comme étant en cours par un autre client de la base de données. À un moment donné, elle n'a pas encore eu lieu, et au moment suivant, elle s'est déjà produite en totalité (ou rien ne s'est produit si la transaction a été annulée en cours). " source : https://fr.wikipedia.org/wiki/Propri%C3%A9t%C3%A9s_ACID
   - **Deuxième Forme Normale (2NF) :**
     - **Critères :** La table doit être en 1NF et tous les attributs non-clés doivent dépendre entièrement de la clé primaire.
     - **Exemple :** Élimination des dépendances partielles.
   - **Troisième Forme Normale (3NF) :**
     - **Critères :** La table doit être en 2NF et aucun attribut non-clé ne doit dépendre transitivement de la clé primaire.
     - **Exemple :** Élimination des dépendances transitives.
   - **Formes Normales Supérieures :**
     - **BCNF, 4NF, 5NF :** Concepts avancés pour des cas spécifiques.

3. **Avantages de la Normalisation :**
   - **Réduction de la Redondance :** Moins de duplication des données.
   - **Amélioration de l’Intégrité des Données :** Moins de risques d’anomalies.
   - **Optimisation des Requêtes :** Requêtes plus efficaces et simplifiées.

4. **Inconvénients de la Normalisation :**
   - **Complexité Accrue :** Plus de tables et de relations.
   - **Performance :** Peut nécessiter plus de jointures, impactant la performance.

**Exemples Pratiques :**

1. **Normalisation d’une Table Non Normalisée :**
   - **Table Non Normalisée :**
     | Commande_ID | Client_Nom | Client_Email | Produit_ID | Produit_Nom | Quantité |
     |-------------|------------|--------------|------------|-------------|----------|
     | 1           | Dupont     | dupont@mail.com | 101        | Ordinateur  | 2        |
     | 1           | Dupont     | dupont@mail.com | 102        | Souris      | 5        |

   - **Normalisation en 1NF :** Table déjà en 1NF si chaque champ est atomique.
   - **Normalisation en 2NF :** Séparer les informations client dans une table distincte.
   - **Normalisation en 3NF :** Assurer que les attributs dépendent uniquement de la clé primaire.

2. **Application des Formes Normales sur le MLD du Magasin en Ligne :**
   - Vérification que chaque table respecte la 1NF, 2NF et 3NF.
   - Ajustements nécessaires pour éliminer les redondances et les dépendances transitives.

**Exercices Guidés :**

1. **Exercice 1 : Appliquer la 1NF**
   - **Consigne :** Vérifiez si la table `Commande_Produits` est en 1NF et justifiez votre réponse.
   - **Solution Attendue :** Oui, chaque champ contient des valeurs atomiques et il n’y a pas de groupes répétitifs.

2. **Exercice 2 : Appliquer la 2NF**
   - **Consigne :** Identifiez et corrigez les dépendances partielles dans une table donnée.
   - **Exemple :** Une table contenant `Commande_ID`, `Produit_ID`, `Client_ID`, `Client_Nom` nécessite la séparation des informations client.

3. **Exercice 3 : Appliquer la 3NF**
   - **Consigne :** Identifiez et éliminez les dépendances transitives dans une table.
   - **Exemple :** Une table avec `Commande_ID`, `Client_ID`, `Client_Email`, `Client_Téléphone` où `Client_Email` et `Client_Téléphone` dépendent de `Client_ID`.

**Transition vers la Session Suivante :**
- Présentation des résultats des exercices de normalisation.
- Discussion sur l’importance de la normalisation dans la conception de bases de données efficaces.

---

#### **13:00 - 14:30 : Installation et Configuration du SGBDR (MySQL/PostgreSQL)**

**Objectifs :**
- Installer et configurer un Système de Gestion de Base de Données Relationnelle (SGBDR).
- Comprendre les concepts de base pour administrer une base de données.

**Contenu Théorique :**

1. **Présentation des SGBDR :**
   - **MySQL :** Popularité, utilisation courante, avantages.
   - **PostgreSQL :** Fonctionnalités avancées, conformité aux standards, avantages.

2. **Processus d’Installation :**
   - **Téléchargement :** Accéder au site officiel de MySQL ou PostgreSQL.
   - **Installation :** Étapes d’installation sur différents systèmes d’exploitation (Windows, macOS, Linux).
   - **Configuration Initiale :** Définir les paramètres de base (utilisateur root, mot de passe, ports).

3. **Configuration de Base :**
   - **Accès au SGBDR :** Utilisation de l’interface en ligne de commande (CLI) ou d’un outil graphique (MySQL Workbench, pgAdmin).
   - **Création d’Utilisateurs :** Définir des utilisateurs avec des permissions spécifiques.
   - **Gestion des Permissions :** Attribuer des rôles et des droits d’accès aux utilisateurs.

4. **Sécurité de Base :**
   - **Définition de Mots de Passe Forts :** Importance de la robustesse des mots de passe.
   - **Configuration des Pare-feux :** Restreindre l’accès aux ports du SGBDR.
   - **Sauvegardes Initiales :** Configurer des sauvegardes automatiques.

**Exemples Pratiques :**

1. **Installation de MySQL :**
   - **Étapes Détaillées :** Guide pas à pas de l’installation sur un système d’exploitation spécifique.
   - **Configuration Initiale :** Définir le mot de passe root et vérifier l’accès via la CLI.

2. **Création d’un Utilisateur :**
   - **Commande SQL :**
     ```sql
     CREATE USER 'user_magasin'@'localhost' IDENTIFIED BY 'password_secure';
     GRANT ALL PRIVILEGES ON magasin_db.* TO 'user_magasin'@'localhost';
     FLUSH PRIVILEGES;
     ```

3. **Connexion via un Outil Graphique :**
   - **MySQL Workbench :** Configurer une nouvelle connexion avec les paramètres définis.
   - **pgAdmin :** Ajouter un nouveau serveur PostgreSQL avec les informations d’authentification.

**Exercices Guidés :**

1. **Exercice 1 : Installation et Configuration**
   - **Consigne :** Installer MySQL ou PostgreSQL sur votre machine et configurer un utilisateur avec des permissions spécifiques.
   - **Solution Attendue :** Étapes documentées de l’installation, création d’un utilisateur, attribution des permissions.

2. **Exercice 2 : Connexion et Vérification**
   - **Consigne :** Connectez-vous au SGBDR via la CLI et un outil graphique. Vérifiez que vous pouvez accéder aux bases de données avec les permissions attribuées.
   - **Solution Attendue :** Réussite de la connexion et affichage des bases de données disponibles.

**Transition vers la Session Suivante :**
- Vérification que tous les étudiants ont correctement installé et configuré leur SGBDR.
- Introduction aux prochaines étapes : Création des schémas de base de données.

---

#### **14:30 - 14:45 : Pause**

---

#### **14:45 - 16:15 : Création des Schémas de Base de Données à partir du MLD**

**Objectifs :**
- Traduire le MLD en schémas SQL.
- Créer les tables, définir les clés primaires et étrangères, et appliquer les contraintes d’intégrité.

**Contenu Théorique :**

1. **Introduction au Schéma SQL :**
   - **Définition :** Description structurée des tables, des colonnes, des types de données, des clés et des relations dans une base de données relationnelle.
   - **Importance :** Base pour la création et la gestion efficace de la base de données.

2. **Création des Tables :**
   - **Syntaxe SQL :** `CREATE TABLE` avec définition des colonnes et des types de données.
   - **Définition des Clés Primaires :** Utilisation de `PRIMARY KEY`.
   - **Définition des Clés Étrangères :** Utilisation de `FOREIGN KEY`.

3. **Définition des Contraintes d’Intégrité :**
   - **NOT NULL :** Assurer que certaines colonnes ne peuvent pas contenir de valeurs nulles.
   - **UNIQUE :** Garantir l’unicité des valeurs dans une colonne.
   - **CHECK :** Appliquer des conditions spécifiques sur les valeurs des colonnes.
   - **DEFAULT :** Définir des valeurs par défaut pour les colonnes.

4. **Exemples de Scripts SQL :**
   - **Création de la Table `Produit` :**
     ```sql
     CREATE TABLE Produit (
         Produit_ID INT PRIMARY KEY,
         Nom VARCHAR(100) NOT NULL,
         Description TEXT,
         Prix DECIMAL(10, 2) CHECK (Prix > 0),
         Stock INT DEFAULT 0,
         Categorie_ID INT,
         FOREIGN KEY (Categorie_ID) REFERENCES Categorie(Categorie_ID)
     );
     ```
   - **Création de la Table `Commande_Produits` :**
     ```sql
     CREATE TABLE Commande_Produits (
         Commande_ID INT,
         Produit_ID INT,
         Quantité INT CHECK (Quantité > 0),
         PRIMARY KEY (Commande_ID, Produit_ID),
         FOREIGN KEY (Commande_ID) REFERENCES Commande(Commande_ID),
         FOREIGN KEY (Produit_ID) REFERENCES Produit(Produit_ID)
     );
     ```

**Exercices Guidés :**

1. **Exercice 1 : Création des Tables**
   - **Consigne :** À partir du MLD du magasin en ligne, rédiger les scripts SQL pour créer les tables `Client`, `Commande`, et `Paiement` avec les clés primaires et étrangères appropriées.
   - **Solution Attendue :**
     ```sql
     CREATE TABLE Client (
         Client_ID INT PRIMARY KEY,
         Nom VARCHAR(100) NOT NULL,
         Email VARCHAR(100) UNIQUE NOT NULL,
         Adresse TEXT
     );

     CREATE TABLE Commande (
         Commande_ID INT PRIMARY KEY,
         Date DATE NOT NULL,
         Total DECIMAL(10, 2) CHECK (Total >= 0),
         Client_ID INT,
         FOREIGN KEY (Client_ID) REFERENCES Client(Client_ID)
     );

     CREATE TABLE Paiement (
         Paiement_ID INT PRIMARY KEY,
         Méthode VARCHAR(50) NOT NULL,
         Montant DECIMAL(10, 2) CHECK (Montant > 0),
         Commande_ID INT,
         FOREIGN KEY (Commande_ID) REFERENCES Commande(Commande_ID)
     );
     ```

2. **Exercice 2 : Définition des Contraintes d’Intégrité**
   - **Consigne :** Ajouter des contraintes `NOT NULL`, `UNIQUE`, et `CHECK` aux tables créées précédemment.
   - **Solution Attendue :** Voir les exemples de scripts SQL ci-dessus.

**Transition vers la Session Suivante :**
- Présentation des scripts SQL créés par les étudiants.
- Discussion sur les meilleures pratiques pour la définition des schémas de base de données.

---

#### **16:15 - 17:30 : Atelier Pratique : Implémentation de la Base de Données et Configuration des Permissions**

**Objectifs :**
- Implémenter les schémas de base de données en exécutant les scripts SQL.
- Configurer les permissions et les accès pour les différents utilisateurs.
- Assurer la sécurité de la base de données en appliquant les bonnes pratiques.

**Déroulement de l’Atelier :**

1. **Exécution des Scripts SQL :**
   - **Activité :** Les étudiants exécutent les scripts SQL qu’ils ont rédigés pour créer les tables dans leur SGBDR installé.
   - **Vérification :** Assurer que les tables sont créées correctement sans erreurs.

2. **Configuration des Permissions :**
   - **Définir les Rôles Utilisateurs :**
     - **Administrateur :** Accès complet à toutes les tables et opérations.
     - **Utilisateur :** Accès en lecture et écriture sur certaines tables.
     - **Lecture Seule :** Accès uniquement en lecture sur certaines tables.
   - **Exemples de Commandes SQL :**
     ```sql
     -- Création de l'utilisateur administrateur
     CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin_pass';
     GRANT ALL PRIVILEGES ON magasin_db.* TO 'admin'@'localhost';

     -- Création de l'utilisateur standard
     CREATE USER 'user_magasin'@'localhost' IDENTIFIED BY 'user_pass';
     GRANT SELECT, INSERT, UPDATE, DELETE ON magasin_db.Commande TO 'user_magasin'@'localhost';

     -- Création de l'utilisateur lecture seule
     CREATE USER 'readonly'@'localhost' IDENTIFIED BY 'readonly_pass';
     GRANT SELECT ON magasin_db.* TO 'readonly'@'localhost';
     ```

3. **Application des Bonnes Pratiques de Sécurité :**
   - **Utiliser des Mots de Passe Forts :** Encourager l’utilisation de mots de passe complexes pour tous les utilisateurs.
   - **Limiter les Accès Réseau :** Configurer le SGBDR pour n’accepter les connexions que depuis des hôtes de confiance.
   - **Sauvegardes Régulières :** Mettre en place des stratégies de sauvegarde pour prévenir la perte de données.

4. **Vérification de l’Implémentation :**
   - **Test des Permissions :** Les étudiants se connectent avec différents utilisateurs pour vérifier que les permissions sont correctement appliquées.
   - **Validation des Contraintes d’Intégrité :** Insérer, mettre à jour et supprimer des enregistrements pour tester les contraintes définies (e.g., `CHECK`, `NOT NULL`).

**Exercices Guidés :**

1. **Exercice 1 : Exécution des Scripts SQL**
   - **Consigne :** Exécuter les scripts SQL pour créer les tables `Client`, `Commande`, `Paiement`, `Produit`, `Categorie`, et `Commande_Produits`.
   - **Solution Attendue :** Les tables sont créées sans erreurs et apparaissent dans le SGBDR.

2. **Exercice 2 : Configuration des Permissions**
   - **Consigne :** Créer trois utilisateurs (`admin`, `user_magasin`, `readonly`) avec les permissions spécifiées.
   - **Solution Attendue :** Les utilisateurs sont créés avec les permissions appropriées et peuvent accéder aux tables selon leurs rôles.

3. **Exercice 3 : Test des Contraintes d’Intégrité**
   - **Consigne :** Insérer des enregistrements dans les tables en respectant et en violant les contraintes d’intégrité pour vérifier leur fonctionnement.
   - **Solution Attendue :** Les insertions respectant les contraintes réussissent, tandis que celles les violant échouent avec des messages d’erreur appropriés.

**Transition vers la Session Suivante :**
- Discussion sur les défis rencontrés lors de l’implémentation.
- Introduction aux prochaines étapes : utilisation des ORM pour l’accès aux données.


### **Évaluation de la Journée**

1. **Participation :**
   - **Engagement Actif :** Noter la participation des étudiants lors des discussions et des ateliers pratiques.
   - **Questions Posées :** Encourager et évaluer la pertinence des questions des étudiants.

2. **Exercices Pratiques :**
   - **Qualité des Scripts SQL :** Vérifier la complétude et la précision des scripts SQL réalisés durant les exercices.
   - **Configuration des Permissions :** S’assurer que les permissions sont correctement configurées et fonctionnelles.

3. **Compréhension Générale :**
   - **Questions en Fin de Journée :** Poser des questions rapides pour évaluer la compréhension globale des concepts abordés.
   - **Feedback :** Recueillir les impressions des étudiants sur les sujets traités pour identifier les points à clarifier.

4. **Feedback :**
   - **Recueillir les Impressions :** Demander aux étudiants de donner un retour sur la clarté des explications et les difficultés rencontrées.
   - **Adapter les Cours Suivants :** Utiliser le feedback pour ajuster les contenus futurs si nécessaire.


**Bon enseignement !**