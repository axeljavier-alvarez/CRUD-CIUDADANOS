<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// home welcome
$routes->get('/', 'Home::index');

// niveles academicos
$routes->get('ver_niveles_academicos', 'NivelesAcademicos::index');



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


$routes->get('buscar_municipio/(:num)', 'MunicipiosController::buscarMunicipio/$1');

$routes->post('modificar_municipio', 'MunicipiosController::modificarMunicipio');

/* ------------ DEPARTAMENTOS ------------- */
// leer
$routes->get('ver_departamentos', 'DepartamentosController::index');
// Agregar
$routes->post('agregar_departamento', 'DepartamentosController::agregarDepartamento');
// Eliminar
$routes->get('eliminar_departamento/(:num)','DepartamentosController::eliminarDepartamento/$1');

$routes->get('buscar_departamento/(:num)', 'DepartamentosController::buscarDepartamento/$1');

$routes->post('modificar_departamento', 'DepartamentosController::modificarDepartamento');

/* ------------ CIUDADANOS ---------------- */
// leer 
$routes->get('ver_ciudadanos', 'CiudadanosController::index');
// Agregar
$routes->post('agregar_ciudadano', 'CiudadanosController::agregarCiudadano');
// Eliminar
$routes->get('eliminar_ciudadano/(:num)','CiudadanosController::eliminarCiudadano/$1');

$routes->get('buscar_ciudadano/(:num)', 'CiudadanosController::buscarCiudadano/$1');

$routes->post('modificar_ciudadano', 'CiudadanosController::modificarCiudadano');