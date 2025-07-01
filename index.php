<?php 
// Inclure l'en-tête commun à toutes les pages
include('includes/header.php'); 
?>

<div id="hero" class="d-flex align-items-center justify-content-center text-white text-center py-5">
    <img src="https://via.placeholder.com/200x100.png/E64A19/ffffff?text=Plane" alt="Airplane" class="hero-plane d-none d-md-block">
    <div class="container">
        <h1 class="display-4 fw-bold">L'accomplissement parfait de votre pèlerinage reste notre priorité !</h1>
        <p class="lead">Voyages, tourisme, billetterie et organisation de pèlerinage. Votre satisfaction est notre mission.</p>
        <a href="reservation.php" class="btn btn-light btn-lg mt-3">Réserver ou demander un devis</a>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h2 class="fw-bold">Nos Services</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex align-items-center py-3">
                    <i class="bi bi-circle-fill text-warning me-3"></i>
                    <span class="fs-5">Vente des billets d'avion</span>
                </li>
                <li class="list-group-item d-flex align-items-center py-3">
                    <i class="bi bi-circle-fill text-warning me-3"></i>
                    <span class="fs-5">Organisation du HADJ et OUMRA</span>
                </li>
                <li class="list-group-item d-flex align-items-center py-3">
                    <i class="bi bi-circle-fill text-warning me-3"></i>
                    <span class="fs-5">Voyages et séjours (Tourisme & affaires)</span>
                </li>
                <li class="list-group-item d-flex align-items-center py-3">
                    <i class="bi bi-circle-fill text-warning me-3"></i>
                    <span class="fs-5">Réservation d'hôtel</span>
                </li>
                <li class="list-group-item d-flex align-items-center py-3">
                    <i class="bi bi-circle-fill text-warning me-3"></i>
                    <span class="fs-5">Location automobiles</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 text-center">
            <img src="https://via.placeholder.com/800x400.png/2c3e50/ffffff?text=Kaaba" alt="Kaaba" class="img-fluid rounded shadow-lg">
        </div>
    </div>
</div>

<?php 
// Inclure le pied de page commun à toutes les pages
include('includes/footer.php'); 
?>