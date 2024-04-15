<div style="text-align: right;">
    <?php if (isset($_SESSION['usuario_id'])): ?>
        <?php echo " Usuario: {$usuario} | "; ?> <a href='logout.php'>Cerrar sesión</a>
    <?php else: ?>
        <a href="login.php">Iniciar sesión</a>
    <?php endif; ?>
</div>