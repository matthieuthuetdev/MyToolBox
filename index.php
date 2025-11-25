<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Cahier des Charges — MyToolBox</title>
</head>

<body>
    <header>
        <h1>Cahier des Charges — MyToolBox</h1>
    </header>

    <main>
        <section id="presentation">
            <h2>1. Présentation du projet</h2>
            <p>MyToolBox est une plateforme web permettant à ses utilisateurs de créer, organiser et utiliser des outils numériques.</p>
            <p>Dans un premier temps, <strong>les fonctionnalités liées au développement d’outils seront limitées au compte du développeur principal</strong>, afin d’assurer la stabilité, la sécurité et la mise en place correcte des normes techniques. Une fois ces fonctionnalités bien établies, elles pourront être ouvertes aux autres utilisateurs souhaitant devenir développeurs, en respectant les règles définies par la plateforme.</p>
            <p>L’objectif global est d’offrir une véritable « boîte à outils numérique » personnalisable, modulaire et ouverte à la communauté.</p>
        </section>

        <section id="types-utilisateurs">
            <h2>2. Types d’utilisateurs</h2>

            <h3>2.1 Visiteur</h3>
            <p>Utilisateur non connecté. Accès limité au contenu public.</p>

            <h3>2.2 Membre</h3>
            <p>Utilisateur disposant d’un compte standard. Il peut créer et organiser ses ToolBox et gérer ses préférences.</p>

            <h3>2.3 Développeur</h3>
            <p>Membre ayant accès au mode développeur (initialement limité au développeur principal). Il peut créer et gérer ses propres outils.</p>

            <h3>2.4 Administrateur</h3>
            <p>Utilisateur disposant d’un accès complet à la gestion du site, des outils et des utilisateurs. Il veille au respect des règles de création et d’utilisation.</p>
        </section>

        <section id="fonctionnalites">
            <h2>3. Fonctionnalités selon les types d’utilisateurs</h2>

            <h3>3.1 Fonctionnalités pour les Visiteurs</h3>
            <ul>
                <li>Consulter la page d’accueil.</li>
                <li>Consulter la page « À propos ».</li>
                <li>Consulter toutes les pages publiques ne nécessitant pas de connexion.</li>
                <li>Voir la liste des outils disponibles.</li>
                <li>Créer un compte via une adresse mail.</li>
                <li>Se connecter à un compte existant.</li>
            </ul>

            <h3>3.2 Fonctionnalités pour les Membres</h3>

            <h4>Gestion des ToolBox</h4>
            <ul>
                <li>Créer une ToolBox (jusqu’à trois ToolBox par utilisateur).</li>
                <li>Renommer une ToolBox.</li>
                <li>Supprimer une ToolBox <em>(action sensible)</em>.</li>
                <li>Ajouter un outil dans une ToolBox.</li>
                <li>Supprimer un outil d’une ToolBox.</li>
                <li>Activer ou désactiver les mises à jour automatiques d’un outil.</li>
                <li>Laisser un avis sur un outil installé dans au moins une ToolBox.</li>
            </ul>

            <h4>Gestion du compte</h4>
            <ul>
                <li>Modifier son nom d’utilisateur.</li>
                <li>Modifier son adresse mail <em>(action sensible)</em>.</li>
                <li>Modifier son mot de passe <em>(action sensible)</em>.</li>
                <li>Supprimer son compte <em>(action sensible)</em>.</li>
            </ul>

            <h4>Accès aux rôles avancés</h4>
            <ul>
                <li>Activer le mode développeur (si autorisé).</li>
                <li>Activer le mode administrateur (uniquement si l’utilisateur dispose déjà de ce rôle).</li>
            </ul>

            <h3>3.3 Fonctionnalités pour les Développeurs</h3>

            <h4>Création et gestion des outils</h4>
            <ul>
                <li>Créer un nouvel outil.</li>
                <li>Associer un dépôt GitHub à l’outil :
                    <ul>
                        <li>Le dépôt doit contenir un fichier JSON conforme au format défini.</li>
                        <li>Le JSON doit inclure un code de vérification fourni par la plateforme.</li>
                        <li>L’utilisateur doit saisir ce code afin de prouver qu’il est bien propriétaire du dépôt.</li>
                        <li>Une fois validé, l’URL du dépôt ne peut plus être modifiée, sauf demande au support.</li>
                    </ul>
                </li>
                <li>Proposer une mise à jour de l’outil lorsque le dépôt GitHub a été modifié.</li>
                <li>Supprimer un outil <em>(action sensible)</em> : l’outil ne pourra plus être installé mais restera utilisable par les utilisateurs l’ayant déjà ajouté à une ToolBox.</li>
            </ul>

            <h4>Gestion du support</h4>
            <ul>
                <li>Répondre aux avis concernant ses outils.</li>
                <li>Répondre aux tickets concernant ses outils.</li>
                <li>Fermer un ticket.</li>
            </ul>

            <h4>Gestion du rôle</h4>
            <ul>
                <li>Revenir au mode membre.</li>
            </ul>

            <h3>3.4 Fonctionnalités pour les Administrateurs</h3>

            <h4>Gestion des rôles et utilisateurs</h4>
            <ul>
                <li>Ajouter un utilisateur comme administrateur.</li>
                <li>Exclure un développeur ne respectant pas les règles de création.</li>
                <li>Désactiver un compte utilisateur après trois avertissements.</li>
                <li>Ajouter un avertissement à un utilisateur ne respectant pas les conditions générales d’utilisation.</li>
            </ul>

            <h4>Gestion des outils</h4>
            <ul>
                <li>Contacter le propriétaire d’un outil.</li>
                <li>Supprimer un outil ne respectant pas les règles : l’outil devient inutilisable et est retiré de toutes les ToolBox.</li>
                <li>Approuver un outil avant sa publication pour tous les utilisateurs.</li>
            </ul>

            <h4>Support avancé</h4>
            <ul>
                <li>Aider un développeur (avec son accord écrit via un ticket) en prenant temporairement le contrôle de son compte.</li>
                <li>Aider un utilisateur (même principe que ci-dessus).</li>
            </ul>

            <h4>Gestion du rôle</h4>
            <ul>
                <li>Revenir au mode membre.</li>
            </ul>
        </section>

        <section id="actions-sensibles">
            <h2>4. Actions sensibles</h2>
            <p>Toute fonctionnalité marquée comme <em>action sensible</em> nécessite la validation d’un code reçu par email avant d’être exécutée.</p>
            <p>Cela concerne notamment :</p>
            <ul>
                <li>Suppression d’une ToolBox.</li>
                <li>Modification de l’adresse mail.</li>
                <li>Modification du mot de passe.</li>
                <li>Suppression du compte utilisateur.</li>
                <li>Suppression d’un outil par un développeur.</li>
            </ul>
        </section>

        <section id="options-supplementaires">
            <h2>Options supplémentaires</h2>
            <p>Si tu le souhaites, je peux produire :</p>
            <ul>
                <li>Une version PDF propre du cahier des charges.</li>
                <li>Une version visuelle (maquette simple).</li>
                <li>Un diagramme UML (cas d’usage, classes, séquence).</li>
            </ul>
        </section>
    </main>

    <footer>
    </footer>
</body>

</html>