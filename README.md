
```markdown
# 📦 Projet Ansible – Déploiement d'environnements `production` et `staging`

## 👥 Auteurs
- imloul farah LP DEVOPS

---

## 🎯 Objectif du projet

Ce projet a pour but d'automatiser la mise en place de deux environnements (staging et production) avec Ansible :

- Déploiement d’un serveur web complet (NGINX, PHP, MariaDB)
- Une page PHP "Hello World!" testant la connexion à une base MySQL
- Organisation propre avec des rôles Ansible par service
- Sécurisation des mots de passe avec Ansible Vault
- Distinction possible entre les configs de staging et production

---

## 📁 Arborescence du projet

```

ansible-webproject/

├── inventory/

│   ├── production/hosts

│   └── staging/hosts

├── group\_vars/

│   └── all/vault.yml (chiffré avec Ansible Vault)

├── roles/

│   ├── nginx/

│   ├── php/

│   ├── mysql/

│   └── app/

├── site.yml

└── README.md

````

---

## 🧩 Liste des rôles Ansible utilisés

| Rôle    | Fonction                                                                 |
|---------|--------------------------------------------------------------------------|
| nginx   | Installation + configuration de NGINX                                    |
| php     | Installation de PHP, PHP-FPM, et modules nécessaires (php-mysql)         |
| mysql   | Installation de MariaDB + création base + utilisateur                    |
| app     | Déploiement d’un `index.php` testant la connexion à la base              |

---

## 🚀 Commandes utiles

### Ping des hôtes :
```bash
ansible -i inventory/staging/hosts web -m ping
ansible -i inventory/production/hosts web -m ping
````

### Lancer tous les rôles :

```bash
ansible-playbook -i inventory/staging/hosts site.yml --ask-vault-pass
```

### Lancer un rôle spécifique (exemple nginx) :

```bash
ansible-playbook -i inventory/staging/hosts site.yml --tags nginx --ask-vault-pass
```

---

## 🔐 Sécurité

Les mots de passe MySQL sont chiffrés dans :

```bash
group_vars/all/vault.yml
```

Ce fichier est chiffré avec Ansible Vault :

```bash
ansible-vault edit group_vars/all/vault.yml
```

---

## 🧪 Test de bon fonctionnement

Lorsque le projet est bien déployé, accéder à :

```
http://<IP_VM_staging>/
```

Renvoie :

```
✅ Hello World! Connexion MySQL réussie.
```

---

## 🧑‍🏫 Informations de rendu

* Projet poussé sur GitLab
* Enseignant ajouté en tant que **Owner** du dépôt
* Respect de la structure attendue
* README complet

```
