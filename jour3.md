## **Semaine 1 : Persistance des Données et Sécurité**

### **Jour 3 : Développement de Composants d’Accès aux Données (ORM)**

---

### **Objectifs de la Journée**

1. **Comprendre les Fondamentaux des ORM (Object-Relational Mapping) :**
   - Définir ce qu'est un ORM et son rôle dans le développement d'applications.
   - Identifier les avantages et les inconvénients des ORM par rapport aux requêtes SQL directes.

2. **Maîtriser l'Utilisation d'un ORM :**
   - Apprendre à configurer et utiliser un ORM populaire (par exemple, Doctrine pour PHP, Entity Framework pour .NET, Sequelize pour Node.js).
   - Comprendre les concepts clés tels que les entités, les repositories, les migrations, et les relations.

3. **Intégrer les Recommandations de Sécurité avec les ORM :**
   - Prévenir les injections SQL et autres vulnérabilités grâce aux ORM.
   - Appliquer les bonnes pratiques de sécurité lors de la configuration et de l'utilisation des ORM.

4. **Développer des Compétences Pratiques :**
   - Implémenter des opérations CRUD (Create, Read, Update, Delete) en utilisant un ORM.
   - Configurer les relations entre les entités à l'aide de l'ORM choisi.
   - Utiliser les migrations pour gérer les modifications de schéma de la base de données.

---

### **Planning de la Journée**

| **Horaires**    | **Activité**                                                                                   |
|-----------------|-------------------------------------------------------------------------------------------------|
| 09:00 - 10:30   | Introduction aux ORM : Concepts et Avantages                                                 |
| 10:30 - 10:45   | Pause                                                                                           |
| 10:45 - 12:00   | Configuration et Installation d'un ORM (Doctrine/Entity Framework/Sequelize)                  |
| 12:00 - 13:00   | Pause déjeuner                                                                                  |
| 13:00 - 14:30   | Définition des Entités et Configuration des Relations dans l'ORM                              |
| 14:30 - 14:45   | Pause                                                                                           |
| 14:45 - 16:15   | Atelier Pratique : Implémentation des Opérations CRUD avec l'ORM                              |
| 16:15 - 17:30   | Sécurité et Meilleures Pratiques avec les ORM + Révision de la Journée                        |

---

### **Détail des Sessions**

#### **09:00 - 10:30 : Introduction aux ORM : Concepts et Avantages**

**Objectifs :**
- Comprendre ce qu'est un ORM et son rôle dans le développement d'applications.
- Identifier les principaux avantages et inconvénients des ORM.

**Contenu Théorique :**

1. **Définition d’un ORM :**
   - **Object-Relational Mapping (ORM) :** Technique permettant de convertir des données entre des systèmes incompatibles en utilisant des langages orientés objet.
   - **Rôle de l'ORM :** Faciliter la manipulation des données dans une base de données relationnelle en utilisant des objets dans le code.

2. **Avantages des ORM :**
   - **Abstraction de la Base de Données :** Permet aux développeurs de travailler avec des objets plutôt qu'avec des requêtes SQL brutes.
   - **Réduction du Code Boilerplate :** Simplifie les opérations CRUD avec moins de code.
   - **Gestion Automatique des Relations :** Facilite la gestion des relations entre les entités (1:1, 1:N, N:M).
   - **Sécurité :** Réduit le risque d'injections SQL en utilisant des requêtes préparées.

3. **Inconvénients des ORM :**
   - **Performance :** Peut être moins performant que les requêtes SQL optimisées manuellement.
   - **Courbe d'Apprentissage :** Nécessite une compréhension approfondie de l'ORM et de ses configurations.
   - **Complexité :** Peut introduire une couche d'abstraction supplémentaire compliquant le débogage.

4. **Comparaison avec les Requêtes SQL Directes :**
   - **Flexibilité :** Les requêtes SQL directes offrent plus de contrôle et peuvent être optimisées pour des performances spécifiques.
   - **Simplicité pour des Opérations Complexes :** Les ORM peuvent être limités pour des opérations SQL complexes nécessitant des optimisations spécifiques.

**Exemples Concrets :**
- Présentation d'une simple opération CRUD en SQL vs avec un ORM.
- Illustration de la gestion des relations entre entités avec et sans ORM.

---

#### **10:30 - 10:45 : Pause**

---

#### **10:45 - 12:00 : Configuration et Installation d'un ORM (Doctrine/Entity Framework/Sequelize)**

**Objectifs :**
- Apprendre à installer et configurer un ORM dans un projet.
- Comprendre les configurations de base nécessaires pour utiliser l'ORM choisi.

**Contenu Théorique et Pratique :**

1. **Choix de l'ORM :**
   - **Doctrine (PHP) :** Présentation rapide de Doctrine et de ses fonctionnalités principales.
   - **Entity Framework (.NET) :** Présentation rapide d'Entity Framework et de ses fonctionnalités principales.
   - **Sequelize (Node.js) :** Présentation rapide de Sequelize et de ses fonctionnalités principales.

2. **Installation de l'ORM :**
   - **Doctrine (PHP) :**
     ```bash
     composer require doctrine/orm
     ```
   - **Entity Framework (.NET) :**
     ```bash
     dotnet add package Microsoft.EntityFrameworkCore
     ```
   - **Sequelize (Node.js) :**
     ```bash
     npm install sequelize
     npm install pg pg-hstore # Pour PostgreSQL
     ```

3. **Configuration de Base :**
   - **Doctrine (PHP) :**
     ```php
     // bootstrap.php
     use Doctrine\ORM\Tools\Setup;
     use Doctrine\ORM\EntityManager;

     $paths = [__DIR__ . "/src"];
     $isDevMode = true;

     $dbParams = [
         'driver'   => 'pdo_mysql',
         'user'     => 'root',
         'password' => 'password',
         'dbname'   => 'magasin_db',
     ];

     $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
     $entityManager = EntityManager::create($dbParams, $config);
     ```
   - **Entity Framework (.NET) :**
     ```csharp
     // Startup.cs
     services.AddDbContext<MagasinContext>(options =>
         options.UseSqlServer(Configuration.GetConnectionString("DefaultConnection")));
     ```
   - **Sequelize (Node.js) :**
     ```javascript
     const { Sequelize } = require('sequelize');
     const sequelize = new Sequelize('magasin_db', 'root', 'password', {
       host: 'localhost',
       dialect: 'postgres', // ou 'mysql', etc.
     });
     ```

4. **Connexion à la Base de Données :**
   - Vérifier la connexion en exécutant une commande de test (par exemple, lister les tables existantes).

**Exercices Guidés :**

1. **Exercice 1 : Installation de l'ORM**
   - **Consigne :** Installer l'ORM choisi dans votre environnement de développement.
   - **Solution Attendue :** L'ORM est correctement installé et les dépendances sont résolues sans erreurs.

2. **Exercice 2 : Configuration de Base**
   - **Consigne :** Configurer l'ORM pour se connecter à la base de données `magasin_db`.
   - **Solution Attendue :** L'ORM est configuré et peut se connecter à la base de données sans problèmes.

3. **Exercice 3 : Vérification de la Connexion**
   - **Consigne :** Écrire un script simple pour vérifier la connexion à la base de données via l'ORM.
   - **Solution Attendue :** Le script exécute une requête de test et affiche les résultats sans erreurs.

**Transition vers la Session Suivante :**
- Présentation des configurations réalisées par les étudiants.
- Introduction à la définition des entités et des relations dans l'ORM.

---

#### **13:00 - 14:30 : Définition des Entités et Configuration des Relations dans l'ORM**

**Objectifs :**
- Apprendre à définir des entités (classes) qui correspondent aux tables de la base de données.
- Configurer les relations entre les entités à l'aide de l'ORM.

**Contenu Théorique et Pratique :**

1. **Définition des Entités :**
   - **Doctrine (PHP) :**
     ```php
     /**
      * @Entity
      * @Table(name="Produit")
      */
     class Produit {
         /** @Id @Column(type="integer") @GeneratedValue **/
         private $Produit_ID;
         
         /** @Column(type="string", length=100) **/
         private $Nom;
         
         /** @Column(type="text", nullable=true) **/
         private $Description;
         
         /** @Column(type="decimal", scale=2) **/
         private $Prix;
         
         /** @Column(type="integer") **/
         private $Stock;
         
         /**
          * @ManyToOne(targetEntity="Categorie")
          * @JoinColumn(name="Categorie_ID", referencedColumnName="Categorie_ID")
          */
         private $Categorie;
         
         // Getters et Setters...
     }
     ```
   - **Entity Framework (.NET) :**
     ```csharp
     public class Produit
     {
         public int Produit_ID { get; set; }
         public string Nom { get; set; }
         public string Description { get; set; }
         public decimal Prix { get; set; }
         public int Stock { get; set; }

         public int Categorie_ID { get; set; }
         public Categorie Categorie { get; set; }
     }
     ```
   - **Sequelize (Node.js) :**
     ```javascript
     const { Model, DataTypes } = require('sequelize');

     class Produit extends Model {}
     Produit.init({
       Produit_ID: {
         type: DataTypes.INTEGER,
         primaryKey: true,
         autoIncrement: true,
       },
       Nom: {
         type: DataTypes.STRING(100),
         allowNull: false,
       },
       Description: {
         type: DataTypes.TEXT,
         allowNull: true,
       },
       Prix: {
         type: DataTypes.DECIMAL(10, 2),
         allowNull: false,
       },
       Stock: {
         type: DataTypes.INTEGER,
         allowNull: false,
         defaultValue: 0,
       },
     }, {
       sequelize,
       modelName: 'Produit',
       tableName: 'Produit',
       timestamps: false,
     });

     Produit.associate = function(models) {
       Produit.belongsTo(models.Categorie, { foreignKey: 'Categorie_ID' });
     };
     ```

2. **Configuration des Relations :**
   - **One-to-Many (Un-à-Plusieurs) :**
     - Un `Categorie` peut avoir plusieurs `Produit`.
     - **Doctrine (PHP) :**
       ```php
       /**
        * @Entity
        * @Table(name="Categorie")
        */
       class Categorie {
           /** @Id @Column(type="integer") @GeneratedValue **/
           private $Categorie_ID;
           
           /** @Column(type="string", length=100) **/
           private $Nom;
           
           /**
            * @OneToMany(targetEntity="Produit", mappedBy="Categorie")
            */
           private $Produits;
           
           // Getters et Setters...
       }
       ```
     - **Entity Framework (.NET) :**
       ```csharp
       public class Categorie
       {
           public int Categorie_ID { get; set; }
           public string Nom { get; set; }
           
           public ICollection<Produit> Produits { get; set; }
       }
       ```
     - **Sequelize (Node.js) :**
       ```javascript
       class Categorie extends Model {}
       Categorie.init({
         Categorie_ID: {
           type: DataTypes.INTEGER,
           primaryKey: true,
           autoIncrement: true,
         },
         Nom: {
           type: DataTypes.STRING(100),
           allowNull: false,
         },
       }, {
         sequelize,
         modelName: 'Categorie',
         tableName: 'Categorie',
         timestamps: false,
       });

       Categorie.associate = function(models) {
         Categorie.hasMany(models.Produit, { foreignKey: 'Categorie_ID' });
       };
       ```

3. **Migration des Entités vers la Base de Données :**
   - **Doctrine (PHP) :**
     ```bash
     php bin/console doctrine:schema:update --force
     ```
   - **Entity Framework (.NET) :**
     ```bash
     dotnet ef migrations add InitialCreate
     dotnet ef database update
     ```
   - **Sequelize (Node.js) :**
     - Utiliser Sequelize CLI pour les migrations ou synchroniser les modèles directement :
       ```javascript
       sequelize.sync({ force: true });
       ```

**Exercices Guidés :**

1. **Exercice 1 : Définition d’une Nouvelle Entité**
   - **Consigne :** Définir une nouvelle entité `Client` avec les attributs suivants : `Client_ID`, `Nom`, `Email`, `Adresse`.
   - **Solution Attendue :** Définition de la classe `Client` dans l'ORM choisi avec les annotations ou configurations appropriées.

2. **Exercice 2 : Configuration d’une Relation One-to-Many**
   - **Consigne :** Configurer la relation entre `Client` et `Commande` où un `Client` peut passer plusieurs `Commandes`.
   - **Solution Attendue :** Mise en place des associations dans les entités `Client` et `Commande` selon l'ORM utilisé.

3. **Exercice 3 : Migration des Entités**
   - **Consigne :** Générer les migrations et appliquer les modifications pour créer les tables `Client` et `Commande` dans la base de données.
   - **Solution Attendue :** Exécution réussie des commandes de migration sans erreurs et création des tables correspondantes dans la base de données.

**Transition vers la Session Suivante :**
- Présentation des entités et des relations créées par les étudiants.
- Introduction aux opérations CRUD avancées avec l'ORM.

---

#### **14:30 - 14:45 : Pause**

---

#### **14:45 - 16:15 : Atelier Pratique : Implémentation des Opérations CRUD avec l'ORM**

**Objectifs :**
- Développer des compétences pratiques en implémentant des opérations CRUD (Create, Read, Update, Delete) en utilisant l'ORM.
- Appliquer les concepts théoriques appris précédemment dans un contexte pratique.

**Déroulement de l’Atelier :**

1. **Présentation des Opérations CRUD :**
   - **Create :** Ajouter de nouvelles entrées dans la base de données.
   - **Read :** Récupérer des données depuis la base de données.
   - **Update :** Modifier des données existantes dans la base de données.
   - **Delete :** Supprimer des données de la base de données.

2. **Implémentation des Opérations CRUD :**
   - **Doctrine (PHP) :**
     ```php
     // Create
     $produit = new Produit();
     $produit->setNom('Clavier');
     $produit->setDescription('Clavier mécanique');
     $produit->setPrix(49.99);
     $produit->setStock(100);
     $produit->setCategorie($categorie);
     $entityManager->persist($produit);
     $entityManager->flush();

     // Read
     $produit = $entityManager->find('Produit', 1);

     // Update
     $produit->setPrix(44.99);
     $entityManager->flush();

     // Delete
     $entityManager->remove($produit);
     $entityManager->flush();
     ```
   - **Entity Framework (.NET) :**
     ```csharp
     // Create
     using (var context = new MagasinContext())
     {
         var produit = new Produit
         {
             Nom = "Clavier",
             Description = "Clavier mécanique",
             Prix = 49.99M,
             Stock = 100,
             Categorie_ID = 1
         };
         context.Produits.Add(produit);
         context.SaveChanges();
     }

     // Read
     using (var context = new MagasinContext())
     {
         var produit = context.Produits.Find(1);
     }

     // Update
     using (var context = new MagasinContext())
     {
         var produit = context.Produits.Find(1);
         produit.Prix = 44.99M;
         context.SaveChanges();
     }

     // Delete
     using (var context = new MagasinContext())
     {
         var produit = context.Produits.Find(1);
         context.Produits.Remove(produit);
         context.SaveChanges();
     }
     ```
   - **Sequelize (Node.js) :**
     ```javascript
     // Create
     const produit = await Produit.create({
       Nom: 'Clavier',
       Description: 'Clavier mécanique',
       Prix: 49.99,
       Stock: 100,
       Categorie_ID: 1,
     });

     // Read
     const produit = await Produit.findByPk(1);

     // Update
     produit.Prix = 44.99;
     await produit.save();

     // Delete
     await produit.destroy();
     ```

3. **Manipulation des Relations avec l'ORM :**
   - **Doctrine (PHP) :**
     ```php
     // Récupérer les produits d'une catégorie
     $categorie = $entityManager->find('Categorie', 1);
     $produits = $categorie->getProduits();
     ```
   - **Entity Framework (.NET) :**
     ```csharp
     // Récupérer les commandes d'un client
     var client = context.Clients.Include(c => c.Commandes).FirstOrDefault(c => c.Client_ID == 1);
     var commandes = client.Commandes;
     ```
   - **Sequelize (Node.js) :**
     ```javascript
     // Récupérer les produits d'une catégorie
     const categorie = await Categorie.findByPk(1, { include: Produit });
     const produits = categorie.Produits;
     ```

**Exercices Guidés :**

1. **Exercice 1 : Création d’une Nouvelle Entrée**
   - **Consigne :** Utiliser l'ORM pour ajouter un nouveau produit à la base de données.
   - **Solution Attendue :** Code implémentant l'opération `Create` et insertion réussie dans la base de données.

2. **Exercice 2 : Lecture des Données**
   - **Consigne :** Récupérer et afficher les détails d'un produit spécifique en utilisant l'ORM.
   - **Solution Attendue :** Code implémentant l'opération `Read` et affichage correct des données.

3. **Exercice 3 : Mise à Jour d’une Entrée**
   - **Consigne :** Modifier le prix d'un produit existant en utilisant l'ORM.
   - **Solution Attendue :** Code implémentant l'opération `Update` et mise à jour réussie dans la base de données.

4. **Exercice 4 : Suppression d’une Entrée**
   - **Consigne :** Supprimer un produit de la base de données en utilisant l'ORM.
   - **Solution Attendue :** Code implémentant l'opération `Delete` et suppression réussie de la base de données.

**Transition vers la Session Suivante :**
- Présentation des résultats des exercices CRUD.
- Introduction aux migrations et à la gestion des schémas avec l'ORM.

---

#### **16:15 - 17:30 : Sécurité et Meilleures Pratiques avec les ORM + Révision de la Journée**

**Objectifs :**
- Comprendre comment les ORM contribuent à la sécurité des applications.
- Appliquer les meilleures pratiques de sécurité lors de l'utilisation des ORM.
- Consolider les connaissances acquises durant la journée.

**Contenu Théorique :**

1. **Sécurité avec les ORM :**
   - **Prévention des Injections SQL :** Les ORM utilisent des requêtes préparées et échappent automatiquement les entrées utilisateur.
   - **Validation des Données :** Implémenter des validations au niveau des entités pour s'assurer de la cohérence des données.
   - **Gestion des Permissions :** Limiter les opérations autorisées via les rôles et les permissions dans l'ORM.

2. **Bonnes Pratiques de Sécurité :**
   - **Utilisation de Requêtes Paramétrées :** Toujours utiliser les fonctionnalités de l'ORM pour éviter les injections SQL.
   - **Validation et Sanitation des Entrées :** Valider les données avant de les persister dans la base de données.
   - **Gestion des Transactions :** Utiliser les transactions pour garantir l'intégrité des opérations complexes.
   - **Séparation des Responsabilités :** Maintenir une séparation claire entre la logique métier et l'accès aux données.
   - **Audit et Logging :** Implémenter des mécanismes de suivi des opérations pour détecter les anomalies.

3. **Exemples Concrets :**
   - **Exemple d’Injection SQL Prévenue par l’ORM :**
     - **Code Non Sécurisé :**
       ```php
       $query = "SELECT * FROM Produit WHERE Nom = '$nom'";
       $stmt = $entityManager->getConnection()->prepare($query);
       $stmt->execute();
       ```
     - **Code Sécurisé avec l'ORM :**
       ```php
       $produits = $entityManager->getRepository('Produit')->findBy(['Nom' => $nom]);
       ```
   - **Validation des Données :**
     - **Doctrine (PHP) :** Utilisation des annotations pour définir les contraintes.
       ```php
       /**
        * @Column(type="string", length=100, nullable=false)
        */
       private $Nom;
       ```
     - **Entity Framework (.NET) :** Utilisation des Data Annotations.
       ```csharp
       public class Produit
       {
           [Required]
           [StringLength(100)]
           public string Nom { get; set; }
           // Autres propriétés...
       }
       ```
     - **Sequelize (Node.js) :** Définition des validations dans le modèle.
       ```javascript
       Nom: {
         type: DataTypes.STRING(100),
         allowNull: false,
         validate: {
           notEmpty: true,
         },
       },
       ```

**Exercices Guidés :**

1. **Exercice 1 : Prévention des Injections SQL**
   - **Consigne :** Réécrire une requête SQL brute en utilisant l'ORM pour prévenir les injections SQL.
   - **Solution Attendue :** Utilisation des méthodes de l'ORM pour exécuter des requêtes sécurisées sans concaténation directe de chaînes.

2. **Exercice 2 : Implémentation des Validations**
   - **Consigne :** Ajouter des validations aux entités `Produit` et `Client` pour s'assurer que les données sont cohérentes et sécurisées.
   - **Solution Attendue :** Définition des contraintes au niveau des entités via les annotations ou configurations de l'ORM.

3. **Exercice 3 : Gestion des Transactions**
   - **Consigne :** Implémenter une transaction pour une opération complexe impliquant plusieurs entités (par exemple, création d'une commande avec plusieurs produits).
   - **Solution Attendue :** Utilisation des fonctionnalités de l'ORM pour démarrer, committer et rollback des transactions.

**Révision de la Journée :**

1. **Récapitulatif des Concepts Clés :**
   - **ORM :** Définition, avantages, inconvénients.
   - **Configuration et Installation :** Mise en place de l'ORM dans un projet.
   - **Définition des Entités et Relations :** Création des modèles et configuration des associations.
   - **Opérations CRUD :** Implémentation pratique des opérations de base.
   - **Sécurité avec les ORM :** Prévention des injections SQL, validation des données, gestion des transactions.

2. **Questions et Réponses :**
   - **Inviter les Étudiants à Poser des Questions :** Sur les sujets abordés durant la journée.
   - **Répondre aux Questions :** Clarifier les points complexes et approfondir les sujets si nécessaire.
   - **Encourager le Partage d’Expériences :** Si certains étudiants ont des expériences pertinentes à partager.

3. **Préparation pour le Lendemain :**
   - **Présentation Brève des Sujets à Venir :** Annoncer les thèmes du quatrième jour (Développement de Composants dans le Langage de la Base de Données - DQL Repository).
   - **Importance de la Sécurité avec les ORM :** Expliquer comment les ORM seront intégrés dans les prochaines étapes du cours.
   - **Devoirs ou Lectures Recommandées :** Si applicable, suggérer des lectures ou des exercices à préparer pour le lendemain.

---

### **Ressources et Matériel**

1. **Logiciels :**
   - **ORM Choisi :** Doctrine, Entity Framework ou Sequelize installés et configurés.
   - **SGBDR :** MySQL ou PostgreSQL en cours d'utilisation.

2. **Documentation :**
   - **Guides Officiels de l'ORM :** Documentation de Doctrine, Entity Framework ou Sequelize.
   - **Articles sur la Sécurité des ORM :** Ressources en ligne sur les meilleures pratiques de sécurité avec les ORM.

3. **Supports Pédagogiques :**
   - **Exemples de Scripts CRUD :** Fournir des exemples de scripts pour les opérations CRUD.
   - **Cas d’Étude :** Documents détaillant les scénarios d'utilisation des ORM dans le système de gestion d’un magasin en ligne.
   - **Fiches de Bonnes Pratiques de Sécurité :** Récapitulatives des points clés abordés.

---

### **Évaluation de la Journée**

1. **Participation :**
   - **Engagement Actif :** Noter la participation des étudiants lors des discussions et des ateliers pratiques.
   - **Questions Posées :** Encourager et évaluer la pertinence des questions des étudiants.

2. **Exercices Pratiques :**
   - **Qualité des Implémentations :** Vérifier la complétude et la précision des opérations CRUD réalisées durant les exercices.
   - **Respect des Bonnes Pratiques :** S’assurer que les étudiants ont appliqué les concepts de sécurité de manière correcte.

3. **Compréhension Générale :**
   - **Questions en Fin de Journée :** Poser des questions rapides pour évaluer la compréhension globale des concepts abordés.
   - **Quiz Rapide :** Optionnellement, administrer un court quiz pour évaluer les connaissances acquises.

4. **Feedback :**
   - **Recueillir les Impressions :** Demander aux étudiants de donner un retour sur la clarté des explications et les difficultés rencontrées.
   - **Adapter les Cours Suivants :** Utiliser le feedback pour ajuster les contenus futurs si nécessaire.

