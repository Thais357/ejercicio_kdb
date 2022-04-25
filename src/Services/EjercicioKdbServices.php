<?php
namespace Drupal\ejercicio_kdb\Services;
/**
 * Class UtilsService.
 *
 * @package Drupal\ejercicio_kdb\Services;
 */
class EjercicioKdbServices
{
   public function getAllEjemploKdb() {

     // Sacar datos de la base de datos
     $database = \Drupal::database();

     return $database->select('ejemplo_kdb' , 'u')
       ->fields('u')
       ->execute()->fetchAll();
  }

}
