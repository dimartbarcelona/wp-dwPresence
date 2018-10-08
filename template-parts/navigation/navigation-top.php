
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'top',
								'menu_id'        => 'top-menu',
								'container'		 => 'nav',
								'container_class'=> 'navigator',
								'link_before'    => '<span>',
								'link_after'	 => '</span>',
							)
						);
						?>	
						<!-- <nav class="navigator">
							<ul>
								<!-- Como hacer un menú de navegación adaptable a dispositivos móviles. 
								http://www.falconmasters.com/web-design/menu-de-navegacion-responsive/	 -->
								<!-- Icomoon: http://icomoon.io/app -->
								<!--
								<li><a href="#"><span class="icon-home"></span>Inicio</a></li>
								<li><a href="#"><span class="icon-briefcase"></span>Trabajos</a></li>
								<li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
								<li><a href="#"><span class="icon-earth"></span>Servicios</a></li>
								<li><a href="#"><span class="icon-envelop"></span>Contactos</a></li>
							</ul>
						</nav>
						-->