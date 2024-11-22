## **Semaine 1 : Persistance des Données et Sécurité**

### **Jour 1 : Introduction aux Bases de Données Relationnelles**

---

### **Objectifs de la Journée**

1. **Comprendre les Concepts Fondamentaux des Bases de Données Relationnelles :**
   - Définir une base de données relationnelle et ses composants.
   - Appréhender l'évolution des systèmes de gestion de bases de données (SGBD).

2. **Maîtriser la Modélisation des Données :**
   - Concevoir un Modèle Conceptuel de Données (MCD).
   - Transformer un MCD en Modèle Logique de Données (MLD).

3. **Appliquer les Recommandations de Sécurité pour les Bases de Données :**
   - Identifier les principales menaces et vulnérabilités.
   - Mettre en œuvre les bonnes pratiques de sécurité dans la gestion des bases de données.

4. **Développer des Compétences Pratiques :**
   - Créer et manipuler une base de données relationnelle de base.
   - Concevoir un MCD pour un cas d'étude simple.

---

### **Planning de la Journée**

| **Horaires**    | **Activité**                                                                                          |
|-----------------|--------------------------------------------------------------------------------------------------------|
| 09:30 - 10:00   | Accueil des étudiants et présentation du cours                                                        |
| 10:00 - 11:00   | Introduction aux bases de données relationnelles                                                     |
| 11:00 - 11:15   | Pause                                                                                                   |
| 11:15 - 12:30   | Concepts clés : tables, relations, clés primaires et étrangères                                      |
| 12:30 - 13:30   | Pause déjeuner                                                                                          |
| 13:30 - 14:30   | Modélisation des données : Modèle Conceptuel de Données (MCD)                                       |
| 14:30 - 15:00   | Exercices pratiques en groupe                                                                        |
| 15:00 - 15:15   | Pause                                                                                                   |
| 15:15 - 16:45   | Atelier pratique : Création d’un MCD pour un cas d’étude simple                                      |
| 16:45 - 17:30   | Introduction aux recommandations de sécurité pour les bases de données et révision de la journée      |

---

### **Détail des Sessions**

#### **09:30 - 10:00 : Accueil des étudiants et présentation du cours**

**Objectifs :**
- Accueillir les étudiants.
- Présenter le déroulement général du module sur 3 semaines.
- Expliquer les objectifs et les compétences à acquérir.

**Contenu :**
1. **Accueil :**
   - Salutations et prise de présence.
   - Brève présentation personnelle (votre parcours, expertise).

2. **Présentation du Cours :**
   - **Objectifs Généraux :** Décrire les compétences que les étudiants vont acquérir.
   - **Compétences à Valider :** Présenter les compétences spécifiques listées (conception d'interfaces, persistance des données, architecture multicouche, etc.).
   - **Organisation des Cours :** Alternance entre sessions théoriques et ateliers pratiques.
   - **Méthodologie d’Évaluation :** Exercices pratiques, projets de groupe, évaluations continues.
   - **Ressources Disponibles :** Logiciels nécessaires (IDE, SGBD), documentation, plateformes en ligne (GitHub, Trello).

---

#### **10:00 - 11:00 : Introduction aux Bases de Données Relationnelles**

**Objectifs :**
- Comprendre ce qu'est une base de données relationnelle.
- Appréhender les composants fondamentaux et l'évolution des SGBD.

**Contenu Théorique :**

1. **Définition d’une Base de Données :**
   - **Base de Données :** Ensemble structuré de données organisées pour faciliter le stockage, la modification et la récupération des informations.
   - **Système de Gestion de Base de Données (SGBD) :** Logiciel qui permet de créer, manipuler et administrer les bases de données.

2. **Historique et Évolution des SGBD :**
   - **Bases de Données Hiérarchiques :** Organisation en arborescence (ex. IMS).
   - **Bases de Données en Réseau :** Structure plus flexible que hiérarchique (ex. IDMS).
   - **Bases de Données Relationnelles :** Tables interconnectées par des relations (ex. MySQL, PostgreSQL).
   - **Bases de Données NoSQL :** Conçues pour des données non structurées ou semi-structurées (ex. MongoDB, Cassandra).

3. **Concepts Fondamentaux des Bases de Données Relationnelles :**
   - **Tables :** Structures en lignes et colonnes. Chaque table représente une entité.
   - **Enregistrements (ou Lignes) :** Chaque ligne représente une instance unique dans la table.
   - **Champs (ou Colonnes) :** Chaque colonne représente un attribut spécifique des données.
   - **Relations :** Liens logiques entre les tables (basées sur des clés primaires et étrangères).

4. **Langage SQL :**
   - **SQL (Structured Query Language) :** Langage standard pour interagir avec les bases de données relationnelles.
   - **Principales Opérations :** SELECT, INSERT, UPDATE, DELETE.

5. **Avantages des Bases de Données Relationnelles :**
   - **Intégrité des Données :** Maintien de la cohérence et de la précision des données.
   - **Flexibilité et Évolutivité :** Facilité d'ajout de nouvelles données et de modification des structures.
   - **Sécurité et Gestion des Accès :** Contrôle granulaire des permissions et des accès aux données.

**Exemples Concrets :**
- **Table `Étudiants` :**

  | ID | Nom      | Prénom | Email                |
  |----|----------|--------|----------------------|
  | 1  | Dupont   | Jean   | jean.dupont@mail.com |
  | 2  | Martin   | Marie  | marie.martin@mail.com|

- **Table `Cours` :**

  | ID  | Nom du Cours   | Crédit |
  |-----|----------------|--------|
  | 101 | Programmation  | 3      |
  | 102 | Base de Données| 4      |

- **Relation Entre `Étudiants` et `Cours` via `Inscriptions` :**

  | Étudiant_ID | Cours_ID |
  |-------------|----------|
  | 1           | 101      |
  | 2           | 102      |

---

#### **11:15 - 12:30 : Concepts Clés : Tables, Relations, Clés Primaires et Étrangères**

**Objectifs :**
- Comprendre les concepts de clés primaires et étrangères.
- Apprendre à définir et utiliser ces clés pour établir des relations entre tables.
- Identifier et différencier les types de relations (1:1, 1:N, N:M).

**Contenu Théorique :**

1. **Clés Primaires (Primary Keys) :**
   - **Définition :** Un attribut ou un ensemble d'attributs qui identifient de manière unique chaque enregistrement dans une table.
   - **Caractéristiques :**
     - **Unicité :** Chaque valeur de la clé primaire doit être unique.
     - **Non-nullité :** Aucun enregistrement ne peut avoir une valeur nulle pour la clé primaire.
   - **Exemples :**
     - `ID` dans la table `Étudiants`.
     - `ISBN` dans une table `Livres`.

2. **Clés Étrangères (Foreign Keys) :**
   - **Définition :** Un attribut ou un ensemble d'attributs dans une table qui référence la clé primaire d'une autre table.
   - **Rôle :** Établir et maintenir les relations entre les tables.
   - **Exemples :**
     - `Cours_ID` dans la table `Inscriptions` référant `ID` dans `Cours`.
     - `Auteur_ID` dans une table `Livres` référant `ID` dans `Auteurs`.

3. **Types de Relations :**
   - **Un-à-Un (1:1) :**
     - **Définition :** Un enregistrement dans la table A correspond à un seul enregistrement dans la table B, et vice versa.
     - **Exemple :** Chaque personne a un seul passeport.
   - **Un-à-Plusieurs (1:N) :**
     - **Définition :** Un enregistrement dans la table A peut être associé à plusieurs enregistrements dans la table B, mais chaque enregistrement dans la table B ne peut être associé qu'à un seul enregistrement dans la table A.
     - **Exemple :** Un professeur peut enseigner plusieurs cours, mais chaque cours est enseigné par un seul professeur.
   - **Plusieurs-à-Plusieurs (N:M) :**
     - **Définition :** Un enregistrement dans la table A peut être associé à plusieurs enregistrements dans la table B et vice versa.
     - **Exemple :** Les étudiants peuvent s'inscrire à plusieurs cours et chaque cours peut avoir plusieurs étudiants inscrits.

4. **Intégrité Référentielle :**
   - **Définition :** Assure que les relations entre les tables restent cohérentes.
   - **Contraintes d'Intégrité :**
     - **ON DELETE CASCADE :** Supprime automatiquement les enregistrements liés lorsqu'un enregistrement est supprimé.
     - **ON UPDATE CASCADE :** Met à jour automatiquement les enregistrements liés lorsqu'un enregistrement est modifié.

**Exemples Pratiques :**

1. **Définition d’une Clé Primaire :**
   - **Table `Étudiants` :**

     ```sql
     CREATE TABLE Étudiants (
         ID INT PRIMARY KEY,
         Nom VARCHAR(50),
         Prénom VARCHAR(50),
         Email VARCHAR(100)
     );
     ```

2. **Création d’une Clé Étrangère :**
   - **Table `Inscriptions` :**

     ```sql
     CREATE TABLE Inscriptions (
         Étudiant_ID INT,
         Cours_ID INT,
         PRIMARY KEY (Étudiant_ID, Cours_ID),
         FOREIGN KEY (Étudiant_ID) REFERENCES Étudiants(ID),
         FOREIGN KEY (Cours_ID) REFERENCES Cours(ID)
     );
     ```

3. **Illustration d’une Relation Plusieurs-à-Plusieurs :**
   - **Tables `Étudiants`, `Cours` et `Inscriptions`** comme intermédiaire.

**Exercices Guidés :**

1. **Identification des Clés :**
   - **Exercice :** Présentez une table fictive et demandez aux étudiants d'identifier la clé primaire et les clés étrangères.
   - **Exemple :** Table `Auteurs` avec `Auteur_ID` comme clé primaire. Table `Livres` avec `Livre_ID` comme clé primaire et `Auteur_ID` comme clé étrangère.

2. **Détermination des Types de Relations :**
   - **Exercice :** Donnez un ensemble de tables et demandez aux étudiants de déterminer le type de relation entre elles (1:1, 1:N, N:M).
   - **Exemple :** Tables `Professeurs` et `Départements` – Relation 1:N (Un département peut avoir plusieurs professeurs).

---

#### **13:30 - 14:30 : Modélisation des Données : Modèle Conceptuel de Données (MCD)**

**Objectifs :**
- Apprendre à concevoir un Modèle Conceptuel de Données (MCD).
- Identifier les entités, les associations et les attributs.
- Utiliser des outils de modélisation pour créer des MCD.

**Contenu Théorique :**

1. **Introduction au MCD :**
   - **Définition :** Représentation abstraite des données et de leurs relations dans un système d'information.
   - **Utilité :** Facilite la compréhension et la conception de la base de données avant sa mise en œuvre.

2. **Composants Principaux du MCD :**
   - **Entités :** Objets ou concepts ayant une existence propre (ex. `Étudiant`, `Cours`).
   - **Associations :** Liens entre les entités (ex. `Inscribe` entre `Étudiant` et `Cours`).
   - **Attributs :** Caractéristiques des entités (ex. `Nom`, `Prénom` pour `Étudiant`).

3. **Étapes de la Modélisation :**
   - **Identification des Entités :** Déterminer les objets principaux du système.
   - **Définition des Attributs :** Détailler les caractéristiques de chaque entité.
   - **Détermination des Relations :** Définir comment les entités interagissent entre elles.
   - **Spécification des Cardinalités :** Déterminer le nombre d'occurrences possibles pour chaque relation.

4. **Outils de Modélisation :**
   - **Lucidchart :** Outil en ligne de création de diagrammes.
   - **Draw.io :** Application gratuite de création de diagrammes.
   - **Microsoft Visio :** Outil payant avec fonctionnalités avancées.
   - **Outils Spécifiques :** Logiciels dédiés à la modélisation de données (ex. PowerDesigner).

5. **Bonnes Pratiques :**
   - **Clarté et Simplicité :** Éviter les modèles trop complexes.
   - **Normalisation des Données :** Minimiser la redondance et assurer la cohérence.
   - **Documentation :** Annoter les modèles pour faciliter la compréhension.

**Exemples Concrets :**

1. **MCD pour un Système de Gestion de Bibliothèque :**
   - **Entités :** `Livre`, `Auteur`, `Membre`, `Emprunt`.
   - **Associations :**
     - `Écrire` entre `Auteur` et `Livre`.
     - `Emprunter` entre `Membre` et `Livre`.
   - **Attributs :**
     - `Livre` : `ISBN`, `Titre`, `Année de Publication`.
     - `Auteur` : `Auteur_ID`, `Nom`, `Prénom`.
     - `Membre` : `Membre_ID`, `Nom`, `Adresse`.
     - `Emprunt` : `Date Emprunt`, `Date Retour`.

2. **MCD pour un Système de Gestion d’un Magasin en Ligne :**
   - **Entités :** `Produit`, `Catégorie`, `Client`, `Commande`, `Paiement`.
   - **Associations :**
     - `Appartient` entre `Produit` et `Catégorie`.
     - `Passe` entre `Client` et `Commande`.
     - `Effectue` entre `Commande` et `Paiement`.
   - **Attributs :**
     - `Produit` : `Produit_ID`, `Nom`, `Description`, `Prix`, `Stock`.
     - `Catégorie` : `Catégorie_ID`, `Nom`.
     - `Client` : `Client_ID`, `Nom`, `Email`, `Adresse`.
     - `Commande` : `Commande_ID`, `Date`, `Total`.
     - `Paiement` : `Paiement_ID`, `Méthode`, `Montant`.

**Méthodes Pédagogiques :**
- **Présentation Théorique :** Expliquer les concepts avec des exemples concrets.
- **Démonstration en Direct :** Créer un MCD à l’aide d’un outil de modélisation.
- **Discussion Interactive :** Répondre aux questions des étudiants et clarifier les concepts.

---

#### **14:30 - 15:00 : Exercices Pratiques en Groupe**

**Objectifs :**
- Appliquer les concepts théoriques de la modélisation des données.
- Favoriser la collaboration et l'apprentissage par la pratique.

**Déroulement :**

1. **Formation des Groupes :**
   - Diviser la classe en petits groupes de 3 à 4 étudiants.

2. **Distribution des Exercices :**
   - **Exercice 1 :** Identifier les entités et leurs attributs pour un système de gestion d'une bibliothèque.
   - **Exercice 2 :** Définir les associations et les cardinalités entre les entités identifiées.

3. **Réalisation des Exercices :**
   - Chaque groupe travaille sur les exercices en utilisant un outil de modélisation (Draw.io, Lucidchart).
   - Encourager les étudiants à discuter et à collaborer pour identifier les entités, les attributs et les relations.

4. **Présentation des Résultats :**
   - Chaque groupe présente brièvement son MCD au reste de la classe.
   - Discussion et feedback collectif pour améliorer les modèles.

**Méthodes Pédagogiques :**
- **Travail Collaboratif :** Encourager l'échange d'idées au sein des groupes.
- **Encadrement Actif :** Circuler dans la salle pour aider les groupes et répondre aux questions.

---

#### **15:15 - 16:45 : Atelier Pratique : Création d’un MCD pour un Cas d’Étude Simple**

**Objectifs :**
- Appliquer les compétences de modélisation des données en concevant un MCD complet.
- Développer des compétences pratiques en collaboration et en utilisation d'outils de modélisation.

**Déroulement de l’Atelier :**

1. **Présentation du Cas d’Étude :**
   - **Cas :** Système de gestion d’un magasin en ligne ou cas libre.
   - **Description :** Le magasin vend divers produits classés en catégories, les clients peuvent passer des commandes et effectuer des paiements.

2. **Étapes de l’Atelier :**

   a. **Identification des Entités :**
      - **Activité :** En groupe, déterminer les entités principales du système.
      - **Guidance :** Guidez les étudiants à travers les étapes d'identification des entités (ex. `Produit`, `Catégorie`, `Client`, `Commande`, `Paiement`).

   b. **Définition des Attributs :**
      - **Activité :** Pour chaque entité, définir les attributs pertinents.
      - **Exemple :**
        - `Produit` : `Produit_ID`, `Nom`, `Description`, `Prix`, `Stock`.
        - `Client` : `Client_ID`, `Nom`, `Email`, `Adresse`.

   c. **Détermination des Relations :**
      - **Activité :** Identifier les associations entre les entités et définir les cardinalités.
      - **Exemple :**
        - Un `Produit` appartient à une `Catégorie` (1:N).
        - Un `Client` peut passer plusieurs `Commandes` (1:N).
        - Une `Commande` peut inclure plusieurs `Produits` (N:M via une table intermédiaire `Commande_Produits`).

   d. **Création du MCD :**
      - **Activité :** Utiliser un outil de modélisation pour dessiner le MCD.
      - **Guidance :** Assurez-vous que les étudiants incluent les entités, attributs, associations et cardinalités.

   e. **Présentation et Discussion :**
      - **Activité :** Chaque groupe présente son MCD.
      - **Feedback :** Fournir des retours constructifs et suggérer des améliorations.

3. **Assistance et Encadrement :**
   - Répondre aux questions et clarifier les concepts si nécessaire.

**Exemple de MCD**

![Exemple de MCD](https://www.prospection-ciblee.com/wp-content/uploads/2021/06/exemple-MCD.jpg)

source : https://www.prospection-ciblee.com/wp-content/uploads/2021/06/exemple-MCD.jpg

**Exercices à Réaliser :**

1. **Création des Entités :** Listez toutes les entités nécessaires pour le système de gestion d’un magasin en ligne.
2. **Définition des Attributs :** Pour chaque entité, identifiez au moins trois attributs pertinents.
3. **Détermination des Relations :** Établissez les relations entre les entités et définissez les cardinalités.
4. **Dessiner le MCD :** Utilisez un outil de modélisation pour représenter graphiquement le MCD.

**Méthodes Pédagogiques :**
- **Travail en Groupes :** Favoriser la collaboration et l’échange d’idées.
- **Encadrement Active :** Fournir un soutien constant et des feedbacks constructifs.
- **Apprentissage Par la Pratique :** Permettre aux étudiants de mettre en application les concepts théoriques.


---

#### **16:45 - 17:30 : Introduction aux Recommandations de Sécurité pour les Bases de Données et Révision de la Journée**

**Objectifs :**
- Comprendre l'importance de la sécurité dans la gestion des bases de données.
- Identifier les principales menaces et vulnérabilités.
- Appliquer les bonnes pratiques de sécurité pour protéger les données.

**Contenu Théorique :**

1. **Importance de la Sécurité des Bases de Données :**
   - **Protection des Données Sensibles :** Garantir la confidentialité, l'intégrité et la disponibilité des données.
   - **Conformité Réglementaire :** Respecter les lois et régulations (ex. RGPD).

2. **Principales Menaces et Vulnérabilités :**
   - **Injections SQL :** Attaques où des requêtes SQL malveillantes sont insérées dans les entrées utilisateur.
   - **Accès Non Autorisé :** Utilisateurs non autorisés accédant aux données.
   - **Fuites de Données :** Exfiltration de données sensibles par des acteurs malveillants.
   - **Perte de Données :** Suppression ou corruption des données critiques.

3. **Bonnes Pratiques de Sécurité :**
   - **Gestion des Accès et des Permissions :**
     - Utiliser le principe du moindre privilège.
     - Définir des rôles et des permissions spécifiques pour chaque utilisateur.
   - **Chiffrement des Données Sensibles :**
     - Chiffrer les données en transit et au repos.
     - Utiliser des algorithmes de chiffrement robustes (ex. AES-256).
   - **Pare-feux et Contrôles d’Accès Réseau :**
     - Configurer des pare-feux pour restreindre l'accès aux bases de données.
     - Utiliser des VPN pour des accès sécurisés.
   - **Sauvegardes Régulières et Plans de Récupération :**
     - Mettre en place des stratégies de sauvegarde régulières.
     - Tester les plans de récupération en cas de sinistre.
   - **Audit et Journalisation des Accès :**
     - Maintenir des journaux d'activité pour surveiller les accès et les modifications.
     - Utiliser des outils d’audit pour détecter les anomalies.

4. **Concepts de Sécurité Spécifiques :**
   - **Authentification et Autorisation :**
     - **Authentification :** Vérifier l'identité des utilisateurs (ex. mots de passe, authentification à deux facteurs).
     - **Autorisation :** Définir ce que les utilisateurs authentifiés sont autorisés à faire.
   - **Séparation des Privilèges :**
     - Séparer les rôles et responsabilités pour minimiser les risques de compromission.
   - **Protection Contre les Injections SQL :**
     - Utiliser des requêtes préparées et des ORM.
     - Valider et échapper les entrées utilisateur.

**Exemples Concrets :**

1. **Injections SQL :**
   - **Exemple de Requête Vulnérable :**

     ```sql
     SELECT * FROM Étudiants WHERE Nom = 'Dupont' AND Prénom = 'Jean';
     ```

   - **Injection Malveillante :**

     ```sql
     ' OR '1'='1
     ```

     Cela pourrait transformer la requête en :

     ```sql
     SELECT * FROM Étudiants WHERE Nom = '' OR '1'='1' AND Prénom = '';
     ```

     Ce qui retourne tous les enregistrements.

2. **Gestion des Permissions :**
   - **Rôles :** Administrateur, Utilisateur, Lecture seule.
   - **Permissions :** L’administrateur a toutes les permissions, l’utilisateur peut lire et écrire, et le rôle lecture seule peut seulement lire les données.

**Méthodes Pédagogiques :**
- **Présentation Théorique :** Expliquer les concepts de sécurité avec des exemples.
- **Études de Cas :** Présenter des incidents réels de sécurité des bases de données.
- **Discussion Interactive :** Encourager les étudiants à poser des questions et à partager leurs connaissances ou expériences en matière de sécurité.

---

#### **17:00 - 17:30 : Révision de la Journée et Session de Questions-Réponses**

**Objectifs :**
- Consolider les connaissances acquises durant la journée.
- Clarifier les points non compris.
- Préparer les étudiants pour la session suivante.

**Déroulement :**

1. **Récapitulatif des Concepts Clés :**
   - **Bases de Données Relationnelles :** Définition, composants, avantages.
   - **Clés Primaires et Étrangères :** Définition, rôle, exemples.
   - **Modélisation des Données :** Création d’un MCD.
   - **Sécurité des Bases de Données :** Menaces, bonnes pratiques.

2. **Questions et Réponses :**
   - **Inviter les Étudiants à Poser des Questions :** Sur les sujets abordés durant la journée.
   - **Répondre aux Questions :** Clarifier les points complexes et approfondir les sujets si nécessaire.
   - **Encourager le Partage d’Expériences :** Si certains étudiants ont des expériences pertinentes à partager.

3. **Préparation pour le Lendemain :**
   - **Présentation Brève des Sujets à Venir :** Annoncer les thèmes du deuxième jour (Transformation du MCD en MLD et Mise en Place de la Base de Données).
   - **Importance de la Compréhension du MCD :** Expliquer comment le MCD sera la base pour les prochaines étapes.
   - **Devoirs ou Lectures Recommandées :** Si applicable, suggérer des lectures ou des exercices à préparer pour le lendemain.

**Méthodes Pédagogiques :**
- **Discussion Ouverte :** Créer un environnement interactif où les étudiants se sentent à l’aise de poser des questions.
- **Feedback Instantané :** Donner des retours immédiats sur les questions posées pour renforcer la compréhension.
- **Encouragement de l'Auto-Réflexion :** Demander aux étudiants de résumer ce qu'ils ont appris durant la journée.
