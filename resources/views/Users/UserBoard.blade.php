<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
        }
        .dashboard {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .card-body {
            background-color: #f8f9fa;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .list-group-item {
            background-color: #f8f9fa;
        }
        .list-group-item:hover {
            background-color: #e2e6ea;
        }
    </style>
</head>
<body>

<div class="container dashboard">
    <h1 class="text-center mb-4">Tableau de Bord Utilisateur</h1>

    <!-- Informations Personnelles -->
    <div class="card">
        <div class="card-header">
            Informations Personnelles
        </div>
        <div class="card-body">
            <p><strong>Prénom :</strong> Jean</p>
            <p><strong>Nom :</strong> Dupont</p>
            <p><strong>Email :</strong> jean.dupont@example.com</p>
            <p><strong>Numéro de mobile :</strong> +33 6 12 34 56 78</p>
        </div>
    </div>

    <!-- Réservations -->
    <div class="card">
        <div class="card-header">
            Mes Réservations
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">Réservation #12345 - Hôtel ABC - 15/09/2023</li>
                <li class="list-group-item">Réservation #12346 - Hôtel XYZ - 20/09/2023</li>
                <li class="list-group-item">Réservation #12347 - Hôtel DEF - 25/09/2023</li>
            </ul>
        </div>
    </div>

    <!-- Paramètres de Compte -->
    <div class="card">
        <div class="card-header">
            Paramètres de Compte
        </div>
        <div class="card-body">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateProfileModal">Modifier Profil</button>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">Supprimer Compte</button>
        </div>
    </div>
</div>

<!-- Modal pour Modifier Profil -->
<div class="modal fade" id="updateProfileModal" tabindex="-1" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProfileModalLabel">Modifier Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateProfileForm">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstName" value="Jean" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lastName" value="Dupont" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="jean.dupont@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Numéro de mobile</label>
                        <input type="tel" class="form-control" id="mobile" value="+33 6 12 34 56 78" required>
                    </div>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour Supprimer Compte -->
<div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAccountModalLabel">Supprimer Compte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer votre compte ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
