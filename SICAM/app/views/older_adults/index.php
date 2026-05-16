<?php require __DIR__ . '/../layouts/header.php'; ?>
<a class="btn btn-success mb-2" href="/SICAM/public/adultos-mayores/crear">Nuevo Adulto Mayor</a><table class="table table-striped"><tr><th>ID</th><th>Documento</th><th>Nombre</th><th>Estado</th></tr><?php foreach($rows as $r): ?><tr><td><?= $r['id'] ?></td><td><?= htmlspecialchars($r['numero_documento']) ?></td><td><?= htmlspecialchars($r['nombres'].' '.$r['apellidos']) ?></td><td><?= htmlspecialchars($r['estado']) ?></td></tr><?php endforeach; ?></table>
<?php require __DIR__ . '/../layouts/footer.php'; ?>
