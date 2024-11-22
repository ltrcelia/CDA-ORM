## **Semaine 1 : Persistance des Données et Sécurité**

### **Jour 4 : Développement de Composants dans le Langage de la Base de Données (DQL Repository)**

---

### **Objectifs de la Journée**

1. **Comprendre les Repositories et leur Rôle dans l'ORM :**
   - Définir ce qu'est un repository.
   - Comprendre comment les repositories facilitent l'accès aux données.

2. **Maîtriser le Langage de Requête de l'ORM (DQL pour Doctrine) :**
   - Apprendre les bases du DQL.
   - Savoir écrire des requêtes complexes pour récupérer des données spécifiques.

3. **Optimiser les Requêtes et les Performances :**
   - Utiliser les fonctionnalités avancées de l'ORM pour optimiser les performances des requêtes.
   - Comprendre les concepts de lazy loading et eager loading.

4. **Appliquer les Recommandations de Sécurité dans les Repositories :**
   - Assurer la sécurité des requêtes via les repositories.
   - Prévenir les vulnérabilités liées à l'accès aux données.

5. **Développer des Compétences Pratiques :**
   - Créer et utiliser des repositories personnalisés.
   - Écrire et exécuter des requêtes DQL avancées.
   - Implémenter des stratégies d'optimisation des requêtes.

---

### **Planning de la Journée**

| **Horaires**    | **Activité**                                                                                              |
|-----------------|------------------------------------------------------------------------------------------------------------|
| 09:00 - 10:30   | Introduction aux Repositories et leur Rôle dans l'ORM                                                    |
| 10:30 - 10:45   | Pause                                                                                                       |
| 10:45 - 12:00   | Introduction au Langage de Requête de l'ORM (DQL)                                                         |
| 12:00 - 13:00   | Pause déjeuner                                                                                              |
| 13:00 - 14:30   | Écriture de Requêtes DQL Avancées                                                                          |
| 14:30 - 14:45   | Pause                                                                                                       |
| 14:45 - 16:15   | Atelier Pratique : Création et Utilisation de Repositories Personnalisés avec DQL                          |
| 16:15 - 17:00   | Optimisation des Requêtes et Sécurité dans les Repositories + Révision de la Journée                      |

---

### **Détail des Sessions**

#### **09:00 - 10:30 : Introduction aux Repositories et leur Rôle dans l'ORM**

**Objectifs :**
- Comprendre ce qu'est un repository et son importance dans l'architecture de l'application.
- Identifier les différentes responsabilités d'un repository.

**Contenu Théorique :**

1. **Définition d’un Repository :**
   - **Repository Pattern :** Un pattern de conception qui sépare la logique de l'accès aux données de la logique métier.
   - **Rôle :** Fournir une interface pour interagir avec les entités sans exposer les détails de l'implémentation de l'accès aux données.

2. **Avantages des Repositories :**
   - **Abstraction :** Masque les détails de l'accès aux données, permettant une meilleure séparation des préoccupations.
   - **Testabilité :** Facilite les tests unitaires en permettant de moquer les interactions avec la base de données.
   - **Réutilisabilité :** Permet de centraliser les requêtes fréquentes dans un seul endroit.

3. **Types de Repositories :**
   - **Repository Générique :** Fournit des méthodes de base pour les opérations CRUD.
   - **Repository Spécifique :** Contient des méthodes spécifiques pour des cas d'utilisation particuliers.

4. **Intégration avec l'ORM :**
   - **Doctrine Repositories :** Utilisation des repositories fournis par Doctrine pour interagir avec les entités.
   - **Sequelize Repositories :** Utilisation des modèles de Sequelize pour gérer les données.

**Exemples Concrets :**
- **Repository Générique :** Méthodes de base telles que `find`, `findAll`, `findBy`, `findOneBy`.
- **Repository Spécifique :** Méthodes personnalisées comme `findActiveUsers`, `findRecentOrders`.

---

#### **10:30 - 10:45 : Pause**

---

#### **10:45 - 12:00 : Introduction au Langage de Requête de l'ORM (DQL)**

**Objectifs :**
- Apprendre les bases du Doctrine Query Language (DQL).
- Savoir écrire des requêtes simples pour interagir avec la base de données.

**Contenu Théorique :**

1. **Qu'est-ce que DQL ?**
   - **Définition :** DQL est le langage de requête spécifique à Doctrine, similaire à SQL mais orienté objet.
   - **Fonctionnement :** Permet d'écrire des requêtes en utilisant les entités de l'application plutôt que les tables de la base de données.

2. **Syntaxe de Base de DQL :**
   - **Sélection :** `SELECT`, `FROM`, `WHERE`.
   - **Jointures :** `JOIN`, `LEFT JOIN`, `RIGHT JOIN`.
   - **Agrégations :** `COUNT`, `SUM`, `AVG`, `MIN`, `MAX`.
   - **Ordonnancement :** `ORDER BY`.
   - **Limitation :** `LIMIT`, `OFFSET`.

3. **Exemples de Requêtes Simples :**
   - **Sélection de Tous les Produits :**
     ```dql
     SELECT p FROM Produit p
     ```
   - **Sélection de Produits avec un Prix Supérieur à 50 :**
     ```dql
     SELECT p FROM Produit p WHERE p.Prix > 50
     ```
   - **Sélection de Produits par Catégorie :**
     ```dql
     SELECT p FROM Produit p JOIN p.Categorie c WHERE c.Nom = :categorieNom
     ```

4. **Paramètres dans DQL :**
   - **Utilisation de Paramètres :** Sécuriser les requêtes en utilisant des paramètres pour éviter les injections SQL.
   - **Exemple :**
     ```dql
     SELECT p FROM Produit p WHERE p.Nom = :nom
     ```

**Exemples Concrets :**
- **Requête avec Paramètre :**
  ```php
  $query = $entityManager->createQuery(
      'SELECT p FROM Produit p WHERE p.Nom = :nom'
  )->setParameter('nom', 'Clavier');
  
  $produits = $query->getResult();
  ```

- **Requête avec Jointure :**
  ```dql
  SELECT c, p FROM Categorie c JOIN c.Produits p WHERE c.Nom = :categorieNom
  ```

---

#### **13:00 - 14:30 : Écriture de Requêtes DQL Avancées**

**Objectifs :**
- Maîtriser l'écriture de requêtes DQL complexes.
- Apprendre à utiliser les fonctionnalités avancées de DQL pour récupérer des données spécifiques.

**Contenu Théorique et Pratique :**

1. **Requêtes Avancées :**
   - **Sous-requêtes :**
     ```dql
     SELECT p FROM Produit p WHERE p.Prix > (SELECT AVG(p2.Prix) FROM Produit p2)
     ```
   - **Agrégations et Group By :**
     ```dql
     SELECT c.Nom, COUNT(p) AS NombreProduits
     FROM Categorie c
     JOIN c.Produits p
     GROUP BY c.Nom
     ```
   - **Having Clause :**
     ```dql
     SELECT c.Nom, COUNT(p) AS NombreProduits
     FROM Categorie c
     JOIN c.Produits p
     GROUP BY c.Nom
     HAVING COUNT(p) > 5
     ```

2. **Fonctions de DQL :**
   - **Fonctions Textuelles :** `LOWER`, `UPPER`, `CONCAT`.
   - **Fonctions Numériques :** `ABS`, `ROUND`.
   - **Fonctions de Date :** `CURRENT_DATE`, `DATE_DIFF`.
   
   **Exemple :**
   ```dql
   SELECT p.Nom, LOWER(p.Description) FROM Produit p
   ```

3. **Requêtes avec Alias et Sélection Partielle :**
   - **Utilisation d'Alias :**
     ```dql
     SELECT p.Nom, p.Prix FROM Produit p WHERE p.Stock < 10
     ```
   - **Sélection Partielle :**
     ```dql
     SELECT p.Nom, c.Nom FROM Produit p JOIN p.Categorie c
     ```

4. **Pagination avec DQL :**
   - **Limitation des Résultats :**
     ```php
     $query = $entityManager->createQuery(
         'SELECT p FROM Produit p ORDER BY p.Prix ASC'
     )
     ->setFirstResult(10) // Offset
     ->setMaxResults(10); // Limit

     $produits = $query->getResult();
     ```

**Exemples Concrets :**

- **Requête avec Agrégation et Group By :**
  ```dql
  SELECT c.Nom, COUNT(p) AS NombreProduits
  FROM Categorie c
  JOIN c.Produits p
  GROUP BY c.Nom
  HAVING COUNT(p) > 5
  ```

- **Requête avec Fonction de Date :**
  ```dql
  SELECT c.Nom, COUNT(p) AS NombreProduits, CURRENT_DATE() AS DateActuelle
  FROM Categorie c
  JOIN c.Produits p
  GROUP BY c.Nom
  ```

---

#### **14:30 - 14:45 : Pause**

---

#### **14:45 - 16:15 : Atelier Pratique : Création et Utilisation de Repositories Personnalisés avec DQL**

**Objectifs :**
- Créer des repositories personnalisés pour des besoins spécifiques.
- Écrire et exécuter des requêtes DQL avancées dans les repositories.
- Intégrer les repositories personnalisés dans l'application.

**Déroulement de l’Atelier :**

1. **Création d’un Repository Personnalisé :**
   - **Doctrine (PHP) :**
     ```php
     // src/Repository/ProduitRepository.php
     namespace App\Repository;

     use Doctrine\ORM\EntityRepository;

     class ProduitRepository extends EntityRepository
     {
         public function findProductsByCategoryName($categoryName)
         {
             return $this->createQueryBuilder('p')
                         ->join('p.Categorie', 'c')
                         ->where('c.Nom = :nom')
                         ->setParameter('nom', $categoryName)
                         ->getQuery()
                         ->getResult();
         }

         public function findExpensiveProducts($price)
         {
             return $this->createQueryBuilder('p')
                         ->where('p.Prix > :price')
                         ->setParameter('price', $price)
                         ->getQuery()
                         ->getResult();
         }
     }
     ```

   - **Sequelize (Node.js) :**
     ```javascript
     // repositories/ProduitRepository.js
     const { Produit, Categorie, Sequelize } = require('../models');

     class ProduitRepository {
       async findProductsByCategoryName(categoryName) {
         return await Produit.findAll({
           include: [{
             model: Categorie,
             where: { Nom: categoryName }
           }]
         });
       }

       async findExpensiveProducts(price) {
         return await Produit.findAll({
           where: {
             Prix: {
               [Sequelize.Op.gt]: price
             }
           }
         });
       }
     }

     module.exports = new ProduitRepository();
     ```

2. **Utilisation des Repositories Personnalisés :**
   - **Doctrine (PHP) :**
     ```php
     // src/Controller/ProduitController.php
     namespace App\Controller;

     use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
     use Symfony\Component\HttpFoundation\Response;

     class ProduitController extends AbstractController
     {
         public function getExpensiveProducts($price): Response
         {
             $produitRepository = $this->getDoctrine()->getRepository(Produit::class);
             $produits = $produitRepository->findExpensiveProducts($price);

             // Traitement des résultats...
             return new Response(/* ... */);
         }
     }
     ```

   - **Sequelize (Node.js) :**
     ```javascript
     // controllers/ProduitController.js
     const ProduitRepository = require('../repositories/ProduitRepository');

     class ProduitController {
       async getExpensiveProducts(req, res) {
         const { price } = req.params;
         const produits = await ProduitRepository.findExpensiveProducts(price);
         
         res.json(produits);
       }
     }

     module.exports = new ProduitController();
     ```

3. **Écriture et Exécution de Requêtes DQL Avancées dans les Repositories :**
   - **Doctrine (PHP) :**
     ```php
     public function findProductsByCategoryName($categoryName)
     {
         return $this->createQueryBuilder('p')
                     ->join('p.Categorie', 'c')
                     ->where('c.Nom = :nom')
                     ->setParameter('nom', $categoryName)
                     ->getQuery()
                     ->getResult();
     }
     ```

   - **Sequelize (Node.js) :**
     ```javascript
     async findProductsByCategoryName(categoryName) {
       return await Produit.findAll({
         include: [{
           model: Categorie,
           where: { Nom: categoryName }
         }]
       });
     }
     ```

**Exercices Guidés :**

1. **Exercice 1 : Création d’un Repository Personnalisé**
   - **Consigne :** Créer un repository personnalisé pour l'entité `Client` avec une méthode `findClientsByEmailDomain($domain)` qui retourne tous les clients dont l'email se termine par un domaine spécifique (ex. `@gmail.com`).
   - **Solution Attendue :**
     - **Doctrine (PHP) :**
       ```php
       public function findClientsByEmailDomain($domain)
       {
           return $this->createQueryBuilder('c')
                       ->where('c.Email LIKE :domain')
                       ->setParameter('domain', '%@' . $domain)
                       ->getQuery()
                       ->getResult();
       }
       ```
     - **Sequelize (Node.js) :**
       ```javascript
       async findClientsByEmailDomain(domain) {
         return await Client.findAll({
           where: {
             Email: {
               [Sequelize.Op.like]: `%@${domain}`
             }
           }
         });
       }
       ```

2. **Exercice 2 : Écriture de Requêtes DQL Avancées**
   - **Consigne :** Écrire une méthode dans le repository `CommandeRepository` pour trouver toutes les commandes effectuées entre deux dates spécifiques.
   - **Solution Attendue :**
     - **Doctrine (PHP) :**
       ```php
       public function findCommandesBetweenDates($startDate, $endDate)
       {
           return $this->createQueryBuilder('c')
                       ->where('c.Date BETWEEN :start AND :end')
                       ->setParameter('start', $startDate)
                       ->setParameter('end', $endDate)
                       ->getQuery()
                       ->getResult();
       }
       ```
     - **Sequelize (Node.js) :**
       ```javascript
       async findCommandesBetweenDates(startDate, endDate) {
         return await Commande.findAll({
           where: {
             Date: {
               [Sequelize.Op.between]: [startDate, endDate]
             }
           }
         });
       }
       ```

3. **Exercice 3 : Utilisation des Repositories Personnalisés**
   - **Consigne :** Utiliser le repository personnalisé `ClientRepository` pour récupérer tous les clients dont l'email se termine par `@yahoo.com` et afficher leurs noms et emails.
   - **Solution Attendue :**
     - **Doctrine (PHP) :**
       ```php
       $clientRepository = $entityManager->getRepository(Client::class);
       $clients = $clientRepository->findClientsByEmailDomain('yahoo.com');

       foreach ($clients as $client) {
           echo $client->getNom() . ' - ' . $client->getEmail() . "\n";
       }
       ```
     - **Sequelize (Node.js) :**
       ```javascript
       const clients = await ClientRepository.findClientsByEmailDomain('yahoo.com');

       clients.forEach(client => {
         console.log(`${client.Nom} - ${client.Email}`);
       });
       ```

**Transition vers la Session Suivante :**
- Présentation des repositories créés par les étudiants.
- Discussion sur les défis rencontrés et les solutions apportées.
- Introduction aux prochaines étapes : gestion des migrations et des changements de schéma avec l'ORM.

---

#### **16:15 - 17:30 : Optimisation des Requêtes et Sécurité dans les Repositories + Révision de la Journée**

**Objectifs :**
- Optimiser les requêtes DQL pour améliorer les performances.
- Appliquer les meilleures pratiques de sécurité dans les repositories.
- Consolider les connaissances acquises durant la journée.

**Contenu Théorique :**

1. **Optimisation des Requêtes DQL :**
   - **Utilisation des Index :** Comprendre l'impact des index sur les performances des requêtes.
   - **Lazy Loading vs Eager Loading :**
     - **Lazy Loading :** Charger les relations uniquement lorsqu'elles sont explicitement demandées.
     - **Eager Loading :** Charger les relations en même temps que l'entité principale pour réduire le nombre de requêtes.
   - **Optimisation des Agrégations :** Utiliser des fonctions d'agrégation de manière efficace pour réduire la charge de la base de données.

2. **Sécurité dans les Repositories :**
   - **Prévention des Injections SQL :** Toujours utiliser des paramètres dans les requêtes DQL.
   - **Validation des Données :** S'assurer que les données entrantes sont validées avant d'être utilisées dans les requêtes.
   - **Gestion des Exceptions :** Gérer les erreurs et les exceptions de manière sécurisée pour éviter la fuite d'informations sensibles.
   - **Limiter les Données Exposées :** Ne récupérer que les données nécessaires pour minimiser les risques de fuites de données.

3. **Bonnes Pratiques de Sécurité :**
   - **Principe du Moindre Privilège :** Accorder aux utilisateurs et aux services les permissions minimales nécessaires pour effectuer leurs tâches.
   - **Audit et Logging :** Mettre en place des mécanismes d'audit pour suivre les accès et les modifications des données.
   - **Cryptographie :** Utiliser le chiffrement pour protéger les données sensibles en transit et au repos.

**Exemples Concrets :**

- **Optimisation avec Eager Loading :**
  ```dql
  SELECT p, c FROM Produit p JOIN FETCH p.Categorie c WHERE p.Prix > :price
  ```
  ```php
  // Doctrine (PHP)
  $query = $entityManager->createQuery(
      'SELECT p, c FROM Produit p JOIN FETCH p.Categorie c WHERE p.Prix > :price'
  )->setParameter('price', $price);
  
  $produits = $query->getResult();
  ```

  ```javascript
  // Sequelize (Node.js)
  const produits = await Produit.findAll({
    where: { Prix: { [Sequelize.Op.gt]: price } },
    include: [Categorie]
  });
  ```

- **Gestion des Exceptions :**
  ```php
  // Doctrine (PHP)
  try {
      $produits = $produitRepository->findExpensiveProducts($price);
  } catch (\Exception $e) {
      // Log l'erreur et retourner une réponse sécurisée
      error_log($e->getMessage());
      return new Response('Une erreur est survenue.', 500);
  }
  ```

  ```javascript
  // Sequelize (Node.js)
  try {
    const produits = await ProduitRepository.findExpensiveProducts(price);
    res.json(produits);
  } catch (error) {
    console.error(error);
    res.status(500).send('Une erreur est survenue.');
  }
  ```

---

**Exercices Guidés :**

1. **Exercice 1 : Optimisation des Requêtes avec Eager Loading**
   - **Consigne :** Modifier une méthode existante dans un repository pour utiliser l'eager loading afin de récupérer les produits avec leur catégorie en une seule requête.
   - **Solution Attendue :**
     - **Doctrine (PHP) :**
       ```php
       public function findExpensiveProductsWithCategory($price)
       {
           return $this->createQueryBuilder('p')
                       ->join('p.Categorie', 'c')
                       ->addSelect('c')
                       ->where('p.Prix > :price')
                       ->setParameter('price', $price)
                       ->getQuery()
                       ->getResult();
       }
       ```
     - **Sequelize (Node.js) :**
       ```javascript
       async findExpensiveProductsWithCategory(price) {
         return await Produit.findAll({
           where: {
             Prix: {
               [Sequelize.Op.gt]: price
             }
           },
           include: [Categorie]
         });
       }
       ```

2. **Exercice 2 : Sécurisation des Requêtes dans les Repositories**
   - **Consigne :** Revoir une méthode de repository pour s'assurer qu'elle utilise des paramètres et qu'elle valide les entrées avant d'exécuter la requête.
   - **Solution Attendue :**
     - **Doctrine (PHP) :**
       ```php
       public function findProductsByName($nom)
       {
           if (!is_string($nom) || empty($nom)) {
               throw new \InvalidArgumentException('Nom invalide.');
           }

           return $this->createQueryBuilder('p')
                       ->where('p.Nom = :nom')
                       ->setParameter('nom', $nom)
                       ->getQuery()
                       ->getResult();
       }
       ```
     - **Sequelize (Node.js) :**
       ```javascript
       async findProductsByName(nom) {
         if (typeof nom !== 'string' || nom.trim() === '') {
           throw new Error('Nom invalide.');
         }

         return await Produit.findAll({
           where: { Nom: nom }
         });
       }
       ```

3. **Exercice 3 : Implémentation des Bonnes Pratiques de Sécurité**
   - **Consigne :** Ajouter des validations et des protections contre les injections SQL dans une méthode de repository existante.
   - **Solution Attendue :**
     - **Doctrine (PHP) :** Utilisation de paramètres et validation des entrées.
     - **Sequelize (Node.js) :** Utilisation de paramètres et validation des entrées.

---

#### **Révision de la Journée : Session de Questions-Réponses**

**Objectifs :**
- Consolider les connaissances acquises durant la journée.
- Clarifier les points non compris.
- Préparer les étudiants pour la session suivante.

**Déroulement :**

1. **Récapitulatif des Concepts Clés :**
   - **Repositories :** Définition, rôle, types.
   - **DQL :** Syntaxe de base, requêtes avancées, utilisation des paramètres.
   - **Repositories Personnalisés :** Création, utilisation, intégration des requêtes DQL.
   - **Optimisation des Requêtes :** Eager loading, lazy loading, gestion des performances.
   - **Sécurité dans les Repositories :** Prévention des injections SQL, validation des données, gestion des exceptions.

2. **Questions et Réponses :**
   - **Inviter les Étudiants à Poser des Questions :** Sur les sujets abordés durant la journée.
   - **Répondre aux Questions :** Clarifier les points complexes et approfondir les sujets si nécessaire.
   - **Encourager le Partage d’Expériences :** Si certains étudiants ont des expériences pertinentes à partager.

3. **Préparation pour le Lendemain :**
   - **Présentation Brève des Sujets à Venir :** Annoncer les thèmes du cinquième jour (Organisation en Couches et Comparatif MVC/API).
   - **Importance des Repositories dans l’Architecture :** Expliquer comment les repositories s'intègrent dans les architectures multicouches.
   - **Devoirs ou Lectures Recommandées :** Si applicable, suggérer des lectures ou des exercices à préparer pour le lendemain.

