<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// home welcome
$routes->get('/', 'Home::index');
// regiones
$routes->get('ver_regiones', 'RegionesController::index');
// municipios
$routes->get('ver_municipios', 'Municipios::index');
// niveles academicos
$routes->get('ver_niveles_academicos', 'NivelesAcademicos::index');
// departamentos
$routes->get('ver_departamentos', 'Departamentos::index');
// ciudadanos
$routes->get('ver_ciudadanos', 'Ciudadanos::index');


/* ------------- AGREGAR  --------------- */
// 1. regiones
$routes->get('nueva_region', 'RegionesController::nuevaRegion');
$routes->post('agregar_region', 'RegionesController::agregarRegion');



/* ------------ ELIMINAR ------------ */
// 1. regiones
$routes->get('eliminar_region/(:num)','RegionesController::eliminarRegion/$1');




