<?php
namespace Drupal\ejercicio_kdb\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class EjercicioKdbController extends ControllerBase
{
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function myPage() {
    $element = array(
      '#markup' => 'Hello, world',
    );
    return $element;
  }

  public function getKdbEntities() {

    $query = \Drupal::service('ejercicio_kdb_services')->getAllEjemploKdb();

    return array(
      '#theme' => 'ejercicio-kdb',
      '#titulo' => $this->t('Listado de entidades ejercicio kdb'),
      '#descripcion' => $this->t('Kdb entity disponibles'),
      '#data' => $query
    );
  }
}
