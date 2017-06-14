<?php

//require_once("conectar.php");

//$connicefood=$socket->consultar("SELECT * FROM producto");

?>

                                          <div class="wrap">
<?php

//while ($fila=$socket->f_registros($connicefood))
foreach ($compras as $fila) 
       {
?>




						<section class="cols">
							<div class="box">
								<div>
									<h2><span></span></h2>
									<figure><img src="<?php echo base_url(); ?>images/combo/<?php echo $fila->Imagen; ?>" alt=""></figure>
      									<h4> <?php echo $fila->Nombre . "</br>";?></h4>
                                        <p class="p2"><?php echo $fila->Descripcion . "</br>" . $fila->Precio; ?>. </p>
									
			

								</div>
							</div>
						</section>
<?php
}
?>

					</div>