<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// home welcome
$routes->get('/', 'Home::index');

// niveles academicos
$routes->get('ver_niveles_academicos', 'NivelesAcademicos::index');
// departamentos
$routes->get('ver_departamentos', 'Departamentos::index');
// ciudadanos
$routes->get('ver_ciudadanos', 'Ciudadanos::index');


/* ------------- REGIONES  --------------- */

// leer
$routes->get('ver_regiones', 'RegionesController::index');
// Agregar
$routes->get('nueva_region', 'RegionesController::nuevaRegion');
$routes->post('agregar_region', 'RegionesController::agregarRegion');
// Eliminar
$routes->get('eliminar_region/(:num)','RegionesController::eliminarRegion/$1');
// Actualizar
$routes->get('buscar_region/(:num)', 'RegionesController::buscarRegion/$1');
$routes->post('modificar_region', 'RegionesController::modificarRegion');

/* ------------- MUNICIPIOS  --------------- */
// leer
$routes->get('ver_municipios', 'MunicipiosController::index');
// Agregar
$routes->post('agregar_municipio', 'MunicipiosController::agregarMunicipio');
// Eliminar
$routes->get('eliminar_municipio/(:num)','MunicipiosController::eliminarMunicipio/$1');
