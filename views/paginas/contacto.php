<main class="contenedor seccion">
        <h1>Contacto</h1>

        <?php 
            if($mensaje){ ?>
                <p class='alerta exito'> <?php echo $mensaje; ?></p>;
        <?php } ?>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="Imagen Contacto" loading="lazy">
        </picture>

        <h2>llene el formulario de contacto</h2>

        <form class="formulario" action="/contacto" method="POST">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]" >

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje"  name="contacto[mensaje]" ></textarea>
            </fieldset>
            
            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
                <select id="opciones"  name="contacto[tipo]">
                    <option value="" disabled selected>-- Seleccione</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>
                <label for="presupuesto">Precio o Presupuesto </label>
                <input type="number" placeholder="Tu Precio o presupuesto" id="presupuesto"  name="contacto[precio]" >
                
            </fieldset>
            
            <fieldset>
                <legend>Contacto</legend>
                
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input type="radio" value="telefono" id="contactar-telefono"  name="contacto[contacto]" >
                    
                    <label for="contactar-email">E-mail</label>
                    <input  type="radio" value="email" id="contactar-email"  name="contacto[contacto]" >
                </div>

                <div id="contacto"></div>

                
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
