<?php

namespace Drupal\ejercicio_kdb\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;

/**
 * Provides an interface for defining Ejemplo kdb entities.
 *
 * @ingroup ejercicio_kdb
 */
interface EjemploKdbInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Ejemplo kdb name.
   *
   * @return string
   *   Name of the Ejemplo kdb.
   */
  public function getName();

  /**
   * Sets the Ejemplo kdb name.
   *
   * @param string $name
   *   The Ejemplo kdb name.
   *
   * @return \Drupal\ejercicio_kdb\Entity\EjemploKdbInterface
   *   The called Ejemplo kdb entity.
   */
  public function setName($name);

  /**
   * Gets the Ejemplo kdb creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Ejemplo kdb.
   */
  public function getCreatedTime();

  /**
   * Sets the Ejemplo kdb creation timestamp.
   *
   * @param int $timestamp
   *   The Ejemplo kdb creation timestamp.
   *
   * @return \Drupal\ejercicio_kdb\Entity\EjemploKdbInterface
   *   The called Ejemplo kdb entity.
   */
  public function setCreatedTime($timestamp);

}
