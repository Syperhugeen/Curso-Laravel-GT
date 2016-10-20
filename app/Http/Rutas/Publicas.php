<?php 

require __DIR__ . '/Empresa/Rutas_Empresa.php';

require __DIR__ . '/Users/Rutas_Users.php';

require __DIR__ . '/Marcas/Rutas_Marcas.php';

require __DIR__ . '/Home/Rutas_Home.php';

require __DIR__ . '/Proyectos/Rutas_Proyectos.php';



//Ruta de Home
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Controller@get_home',
  'as'   => 'home']
);


//Contacto
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);

//Empresa
Route::get('/Empresa' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_empresa',
  'as'   => 'get_pagina_empresa']
);

//Servicios
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);

//Noticias
Route::get('/Noticias' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_noticias_noticias_listado',
  'as'   => 'get_pagina_noticias_noticias_listado']
);


//Proyectos
Route::get('/Proyectos' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_proyecto_listado',
  'as'   => 'get_pagina_proyecto_listado']
);