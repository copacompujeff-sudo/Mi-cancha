<?php require __DIR__ . '/../layouts/header.php'; ?>
<h3>Dashboard</h3><div class="row g-3"><div class="col"><div class="card p-3">Adultos: <?= $stats['adults'] ?></div></div><div class="col"><div class="card p-3">Usuarios: <?= $stats['users'] ?></div></div><div class="col"><div class="card p-3">Alertas: <?= $stats['alerts'] ?></div></div></div>
<?php require __DIR__ . '/../layouts/footer.php'; ?>
