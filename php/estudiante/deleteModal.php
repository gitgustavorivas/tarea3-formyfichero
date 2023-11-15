<div class="modal fade" id="iddel<?=$row['idEstudiante']?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Desea Eliminar el Registro?</h5>
                <button type="button" class="btn-close" data-bs-dismis="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <p>Una vez Eliminado no se podra Recuperar El Registro</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="delete.php?id=<?=$row['idEstudiante']?>" type="button" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>