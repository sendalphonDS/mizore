<?php include_once 'includes/templates/header.php';?>

    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Morbi blandit augue justo, id viverra diam efficitur vitae. Pellentesque ullamcorper ultrices ligula. Integer porta feugiat enim, vel tincidunt ante. Duis vel condimentum lectus. Nulla rutrum mauris vel bibendum rutrum. Sed sed arcu id odio fringilla
            scelerisque. Duis uricies mauris nec elementum iaculis. </p>
    </section>
    <!--seccion-->

    <div class="contenedor programa" clearfix>
        <!--para encuadrar el video-->


        <section class="programa">
            <div class="contenedor-video">
                <video autoplay loop poster="bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">

      </video>

            </div>
            <!--contenedor-video-->
            <div class="contenido-programa">
                <div class="contenedor">
                    <div class="programa-evento">
                        <h2>Programa del Evento</h2>

                <?php
                    try{
                        require_once('includes/funciones/bd_conexion.php');
                        $sql = " SELECT * FROM `categoria_evento` ";   
                        $resultado = $conn->query($sql);
                    }catch(\Exception $e){
                         echo $e->getMessage();
                        }
                    ?>    
                    
                        <nav class="menu-programa">
                        <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <?php $categoria = $cat ['cat_evento']; ?>
                            <a href="#<?php echo strtolower($categoria) ?>">
                            <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i><?php echo $categoria ?>
                        </a>
                        <?php } ?>
                        </nav>

                            
                            <?php
        try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv =invitados.invitado_id ";
        $sql .= "AND eventos.id_cat_evento = 1 " ;
        $sql .= " ORDER BY `evento_id` LIMIT 2; ";
        $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv =invitados.invitado_id ";
        $sql .= "AND eventos.id_cat_evento = 2 " ;
        $sql .= " ORDER BY `evento_id` LIMIT 2; ";
        $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv =invitados.invitado_id ";
        $sql .= "AND eventos.id_cat_evento = 3 " ;
        $sql .= " ORDER BY `evento_id` LIMIT 2; ";
        }catch(\Exception $e){

        echo $e->getMessage();
        }
            ?>

           <?php $conn->multi_query($sql); ?>

        <?php 
            do {
               $resultado = $conn->store_result();
               $row = $resultado->fetch_all(MYSQLI_ASSOC);  ?>
                <?php $i = 0; ?>
                <?php foreach($row as $evento) : ?>
                <?php if($i % 2 == 0) { ?>
               <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
                   <?php } ?>
                            <div class="detalle-evento">
                                <h3><?php echo utf8_encode($evento['nombre_evento'])?></h3>
                                <p><i class="fa fa-clock" aria-hidden="true"></i><?php echo $evento['hora_evento']; ?></p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $evento['fecha_evento']; ?></p>
                                <p><i class="fa fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado'] . " " .  $evento['apellido_invitado']; ?></p>
                            </div>
                           
                <?php if($i % 2 ==1): ?>
                    <a href="calendario.php" class="button float-right">Ver todos</a>
                        </div>
                        <!--talleres-->
                        <?php endif; ?>
                    <?php $i++; ?>
            <?php endforeach; ?>  
            <?php $resultado->free() ?>     
                          
                <?php  } while ($conn->more_results() && $conn->next_result());
        
        
        ?>

                        
                       

                    </div>
                    <!--programa-evento-->

                </div>
                <!--contenedor-->

            </div>
            <!--contenido-programa-->

        </section>
        <!--programa-->
    </div>
    <!--cierre para encuadrar el video-->
     <?php include_once 'includes/templates/invitados.php';?>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>Invitados</li>
                <li>
                    <p class="numero"></p>Talleres</li>
                <li>
                    <p class="numero"></p>Dias</li>
                <li>
                    <p class="numero"></p>Conferecias</li>

            </ul>
        </div>

    </div>

    <section class="precio seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferecias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Todos los dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferecias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferecias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div id="mapa" class="mapa"></div>

    <section class="seccion">
        <h2>Testimonial</h2>
        <div class="testimoniales contenedor clearfix">


            <div class="Testimonial">
                <blockquote>


                    <p>Etiam ut nibh et diam rutrum placerat a ac eros. Nam bibendum nisl vitae dolor condimentum placerat nec eget erat. Ut viverra vulputate libero vitae facilisis. Nullam auctor tellus id tempor mollis. Suspendisse sit amet finibus nibh.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/Testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>

                    </footer>
                </blockquote>
            </div>
            <!--testimonial-->
            <div class="Testimonial">
                <blockquote>


                    <p>Etiam ut nibh et diam rutrum placerat a ac eros. Nam bibendum nisl vitae dolor condimentum placerat nec eget erat. Ut viverra vulputate libero vitae facilisis. Nullam auctor tellus id tempor mollis. Suspendisse sit amet finibus nibh.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/Testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>

                    </footer>
                </blockquote>
            </div>

            <div class="Testimonial">
                <blockquote>


                    <p>Etiam ut nibh et diam rutrum placerat a ac eros. Nam bibendum nisl vitae dolor condimentum placerat nec eget erat. Ut viverra vulputate libero vitae facilisis. Nullam auctor tellus id tempor mollis. Suspendisse sit amet finibus nibh.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/Testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>

                    </footer>
                </blockquote>
            </div>
        </div>

    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>registrate al newsletter:</p>
            <h3>gdlwebcamp</h3>
            <a href="#" class="button transparente">Registro</a>

        </div>
        <!--contenido-->

    </div>
    <!--newsletter-->

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>dias</li>
                <li>
                    <p id="horas" class="numero"></p>horas</li>
                <li>
                    <p id="minutos" class="numero"></p>minutos</li>
                <li>
                    <p id="segundos" class="numero"></p>segundos</li>

            </ul>

        </div>

    </section>
    <?php include_once 'includes/templates/footer.php';?>