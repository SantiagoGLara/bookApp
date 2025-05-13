<?php

// tipo libro
$consulta = "SELECT DISTINCT id, tipo from tipo;";
$result = bd_consulta($consulta);
// consulta para autores
$consulta ="SELECT nombre from autor;";
$result2= bd_consulta($consulta);
//consulta editorial, idioma y pais de origen



?>
<form class="" action="respuesta.html" method="post">
    <div class="dato">
        <div class="etiqueta">
            <label for="titulo">Título del libro:</label>
        </div>
        <div class="control">
            <input type="text" name="titulo" value="">
        </div>
    </div>


    <div class="dato">
        <div class="etiqueta">
            <label for="tipo">Tipo de libro de acuerdo al contenido:</label>
        </div>
        <div class="control">
            <select class="" name="tipo">

                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['tipo'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="dato">
        <div class="etiqueta">
            <label for="tipo">Autor</label>
        </div>
        <div class="control">
            <select class="" name="autor">

                <?php
                while ($row = mysqli_fetch_assoc($result2)) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="tipo">Autor</label>
        </div>
        <div class="control">
            <select class="" name="autor">

                <?php
                while ($row = mysqli_fetch_assoc($result2)) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="dato">
        <div class="etiqueta">
            <label for="autor">Autor:</label>
        </div>
        <div class="control">
            <input type="text" name="autor" value="">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="editorial">Editorial:</label>
        </div>
        <div class="control">
            <input type="text" name="editorial" value="">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="isbn">ISBN:</label>
        </div>
        <div class="control">
            <input pattern="[0-9]{13}" name="isbn" value="">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="numero_paginas">Número de páginas:</label>
        </div>
        <div class="control" id="numero_paginas">
            <input type="number" name="numero_paginas" min="1" value="">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="pais">País de origen:</label>
        </div>
        <div class="control">
            <input type="text" name="pais" value="México">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="dimensiones">Dimensión del libro (cms):</label>
        </div>
        <div class="control">
            <select class="" name="dimensiones">
                <option value="1">A4 21 x 29.7</option>
                <option value="2" selected>17 x 24</option>
                <option value="3">15.24 x 22.86</option>
                <option value="4">13.97 x 21.59</option>
                <option value="5">14.8 x 21</option>
                <option value="6">13.97 x 21.59</option>
                <option value="7">11 x 17</option>
                <option value="99">Otro</option>
            </select>
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="idioma">Idioma:</label>
        </div>
        <div class="control">
            <select class="" name="tipo">
                <option value="1">Inglés</option>
                <option value="2" selected>Español</option>
                <option value="3">Francés</option>
                <option value="4">Alemán</option>
                <option value="5">Nahualt</option>
                <option value="6">Otro</option>
            </select>
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="portada">Imágen de la portada o cubierta:</label>
        </div>
        <div class="control">
            <input type="file" name="portada" value="" accept="image/jpeg, image/gif, image/x-png">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="contraportada">Imágen de la contraportada:</label>
        </div>
        <div class="control">
            <input type="file" name="contraportada" value="" accept="image/jpeg, image/gif, image/x-png">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="sobrecubierta">El libro tiene sobrecubierta:</label>
        </div>
        <div class="control" id="sobrecubierta">
            <input type="checkbox" name="sobrecubierta" value="1">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="tipo_pasta">Pasta suave:</label>
        </div>
        <div class="control" id="tipo_pasta">
            <input type="radio" name="tipo_pasta" value="1" checked>
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="tipo_pasta">Pasta dura:</label>
        </div>
        <div class="control" id="tipo_pasta">
            <input type="radio" name="tipo_pasta" value="2">
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="resumen">Resumen del libro:</label>
        </div>
        <div class="control">
            <textarea name="resumen" rows="8" cols="40"></textarea>
        </div>
    </div>
    <div class="dato">
        <div class="etiqueta">
            <label for="">&nbsp;</label>
        </div>
        <div class="control" id="botones">
            <button type="reset" name="button">Cancelar</button>
            <button type="submit" name="button">Enviar</button>
        </div>
    </div>
</form>