## Testez vos compétences Laravel — Migrations

Ce dépôt est un exercice pratique : réalisez les tâches listées ci-dessous
et faites passer les tests PHPUnit, qui échouent volontairement pour le moment.

Pour vérifier votre progression, les tests se trouvent dans `tests/Feature/MigrationsTest.php`.

Au départ, si vous exécutez `php artisan test`, tous les tests échouent.
Votre objectif est de les faire passer un par un.

> ⚠️ **Vous n'avez pas le droit de modifier les fichiers de tests.**


## Notice importante — Base de données MySQL

**Les tests sont configurés pour s'exécuter sur une base de données MySQL locale
nommée `mysql_testing`.**

**N'oubliez pas de créer cette base de données.**

**Attention : cette base sera vidée fréquemment par les tests via `migrate:fresh`.**


## Installation du projet

```sh
git clone <url-du-depot> projet
cd projet
cp .env.example .env  # Éditez vos variables d'environnement
composer install
php artisan key:generate
```

Puis lancez `php artisan test` pour voir les erreurs à corriger.


## Soumettre votre solution

Créez une Pull Request (ou Merge Request) vers la branche `main`.

---

## Tâche 1. Migration avec clé étrangère (Foreign Key)

Le dossier `database/migrations/task1` contient des migrations pour les tables `tasks` et `comments`,
chacune avec une clé étrangère (foreign key) vers la table `users`.
Ces migrations échouent actuellement : trouvez la raison et corrigez-les pour qu'elles s'exécutent correctement.

Méthode de test : `test_successful_foreign_key_tasks_comments()`.

---

## Tâche 2. Ajout d'une colonne après une autre colonne

Le dossier `database/migrations/task2` contient des migrations pour la table `users` :
l'une crée la table, l'autre ajoute un nouveau champ.
Ce nouveau champ `surname` doit être ajouté dans un ordre précis — après le champ `name`.

Modifiez le fichier `database/migrations/task2/2021_11_09_075928_add_surname_to_users_table.php`.

Méthode de test : `test_column_added_to_the_table()`.

---

## Tâche 3. Suppression logique (Soft Deletes)

Le dossier `database/migrations/task3` contient une migration pour la table `projects`.
Ajoutez-y le champ nécessaire pour activer la fonctionnalité de suppression logique (soft deletes).

Modifiez le fichier `database/migrations/task3/2021_11_09_080955_create_projects_table.php`.

Méthode de test : `test_soft_deletes()`.

---

## Tâche 4. Suppression en cascade des enregistrements liés

Le dossier `database/migrations/task4` contient des migrations pour les tables `categories` et `products`.
Modifiez la migration de la table `products` pour que la suppression d'une catégorie supprime automatiquement
ses produits, au lieu de lever une erreur.

Modifiez le fichier `database/migrations/task4/2021_11_09_082205_create_products_table.php`.

Méthode de test : `test_delete_parent_child_record()`.

---

## Tâche 5. Vérifier l'existence d'une table ou d'une colonne

Le dossier `database/migrations/task5` contient des migrations pour la table `users`.
Par erreur, un développeur tente d'ajouter une colonne qui existe déjà, et de recréer une table déjà existante.

Modifiez les migrations pour ignorer ces opérations si la colonne ou la table existe déjà,
afin que `php artisan migrate` s'exécute sans erreur.

Modifiez les fichiers `database/migrations/task5/2021_11_09_083121_update_users_table.php`
et `database/migrations/task5/2021_11_09_083225_recreate_users_table.php`.

Méthode de test : `test_repeating_column_table()`.

---

## Tâche 6. Valeur de colonne unique (Duplicate)

Le dossier `database/migrations/task6` contient une migration pour la table `companies`.
Modifiez cette migration pour qu'il soit impossible de créer plusieurs entreprises avec le même nom.

Modifiez le fichier `database/migrations/task6/2021_11_09_083843_create_companies_table.php`.

Méthode de test : `test_duplicate_name()`.

---

## Tâche 7. Valeur de colonne automatique (Default)

Le dossier `database/migrations/task7` contient une migration pour la table `companies`.
Modifiez cette migration pour que si une entreprise est créée sans nom,
la valeur automatique du champ `name` soit `"My company"`.

Modifiez le fichier `database/migrations/task7/2021_11_09_084922_create_new_companies_table.php`.

Méthode de test : `test_automatic_value()`.

---

## Tâche 8. Renommer une table

Le dossier `database/migrations/task8` contient une migration pour la table `company`.
Il a ensuite été décidé de renommer la table de `"company"` en `"companies"`.
Écrivez le code correspondant dans le second fichier de migration.

Modifiez le fichier `database/migrations/task8/2021_11_09_085453_rename_companies_table.php`.

Méthode de test : `test_renamed_table()`.

---

## Tâche 9. Renommer une colonne

Le dossier `database/migrations/task9` contient une migration pour la table `companies`.
Il a ensuite été décidé de renommer la colonne de `companies.title` en `companies.name`.
Écrivez le code correspondant dans le second fichier de migration.

Modifiez le fichier `database/migrations/task9/2021_11_09_090018_rename_name_in_companies_table.php`.

Méthode de test : `test_renamed_column()`.

---

## Tâche 10. Clé étrangère nullable (NULL on Foreign Key)

Le dossier `database/migrations/task10` contient des migrations pour les tables `countries` et `visitors`.
Un visiteur peut avoir un pays non détecté, donc `country_id` peut être `NULL`.
Modifiez la migration de la table `visitors` pour autoriser cette valeur.

Modifiez le fichier `database/migrations/task10/2021_11_09_090858_create_visitors_table.php`.

Méthode de test : `test_null_foreign_key()`.

---

## Questions / Problèmes ?

Si vous rencontrez des difficultés ou avez des suggestions, créez une Issue.

Bon courage !
