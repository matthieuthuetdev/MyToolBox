<section class="container mt-5">
    <h2 class="mb-4">Liste complète des futures fonctionnalités de la plateforme</h2>

    <div class="row g-4">
        <!-- Visiteur -->
        <div class="col-md-6 mb-4">
            <div class="p-4 border rounded">
                <h3 class="mb-3">Visiteur</h3>
                <ul class="mb-0">
                    <li class="mb-2">Consulter la page d'accueil</li>
                    <li class="mb-2">Consulter la page « À propos »</li>
                    <li class="mb-2">Consulter toutes les pages publiques ne nécessitant pas de connexion</li>
                    <li class="mb-2">Voir la liste des outils disponibles</li>
                    <li class="mb-2">Créer un compte via une adresse mail</li>
                    <li class="mb-2">Se connecter à un compte existant</li>
                </ul>
            </div>
        </div>

        <!-- Membre -->
        <div class="col-md-6 mb-4">
            <div class="p-4 border rounded">
                <h3 class="mb-3">Membre</h3>
                
                <h5 class="mt-3 mb-2">Gestion des ToolBox</h5>
                <ul class="mb-3">
                    <li class="mb-2">Créer une ToolBox (jusqu'à trois ToolBox par utilisateur)</li>
                    <li class="mb-2">Renommer une ToolBox</li>
                    <li class="mb-2">Supprimer une ToolBox (action sensible)</li>
                    <li class="mb-2">Ajouter un outil dans une ToolBox</li>
                    <li class="mb-2">Supprimer un outil d'une ToolBox</li>
                    <li class="mb-2">Activer ou désactiver les mises à jour automatiques d'un outil</li>
                    <li class="mb-2">Laisser un avis sur un outil installé dans au moins une ToolBox</li>
                </ul>

                <h5 class="mt-3 mb-2">Gestion du compte</h5>
                <ul class="mb-3">
                    <li class="mb-2">Modifier son nom d'utilisateur</li>
                    <li class="mb-2">Modifier son adresse mail (action sensible)</li>
                    <li class="mb-2">Modifier son mot de passe (action sensible)</li>
                    <li class="mb-2">Supprimer son compte (action sensible)</li>
                </ul>

                <h5 class="mt-3 mb-2">Accès aux rôles avancés</h5>
                <ul class="mb-0">
                    <li class="mb-2">Activer le mode développeur (si autorisé)</li>
                </ul>
            </div>
        </div>

        <!-- Développeur -->
        <div class="col-md-6 mb-4">
            <div class="p-4 border rounded">
                <h3 class="mb-3">Développeur</h3>
                
                <h5 class="mt-3 mb-2">Création et gestion des outils</h5>
                <ul class="mb-3">
                    <li class="mb-2">Créer un nouvel outil</li>
                    <li class="mb-2">Associer un dépôt GitHub à l'outil :
                        <ul class="mt-1">
                            <li class="mb-1">Le dépôt doit contenir un fichier JSON conforme au format défini</li>
                            <li class="mb-1">Le JSON doit inclure un code de vérification fourni par la plateforme</li>
                            <li class="mb-1">L'utilisateur doit saisir ce code pour prouver qu'il est propriétaire du dépôt</li>
                            <li class="mb-1">Une fois validé, l'URL du dépôt ne peut plus être modifiée (sauf demande au support)</li>
                        </ul>
                    </li>
                    <li class="mb-2">Proposer une mise à jour de l'outil lorsque le dépôt GitHub a été modifié</li>
                    <li class="mb-2">Supprimer un outil (action sensible) : l'outil ne pourra plus être installé mais restera utilisable par les utilisateurs l'ayant déjà ajouté</li>
                </ul>

                <h5 class="mt-3 mb-2">Gestion du support</h5>
                <ul class="mb-3">
                    <li class="mb-2">Répondre aux avis concernant ses outils</li>
                    <li class="mb-2">Répondre aux tickets concernant ses outils</li>
                    <li class="mb-2">Fermer un ticket</li>
                </ul>

                <h5 class="mt-3 mb-2">Gestion du rôle</h5>
                <ul class="mb-0">
                    <li class="mb-2">Revenir au mode membre</li>
                </ul>
            </div>
        </div>

        <!-- Information sur les actions sensibles -->
        <div class="col-12 mb-4">
            <div class="p-4 border rounded bg-light">
                <h4 class="mb-3">ℹ️ Actions sensibles</h4>
                <p class="mb-2">Toute fonctionnalité marquée comme <strong>action sensible</strong> nécessite la validation d'un code reçu par email avant d'être exécutée.</p>
                <p class="mb-0"><strong>Cela concerne :</strong></p>
                <ul class="mb-0 mt-2">
                    <li class="mb-2">Suppression d'une ToolBox</li>
                    <li class="mb-2">Modification de l'adresse mail</li>
                    <li class="mb-2">Modification du mot de passe</li>
                    <li class="mb-2">Suppression du compte utilisateur</li>
                    <li class="mb-2">Suppression d'un outil par un développeur</li>
                </ul>
            </div>
        </div>
    </div>
</section>
