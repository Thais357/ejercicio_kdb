<?php

namespace Drupal\ejercicio_kdb\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'resultado_formatter_type' formatter.
 *
 * @FieldFormatter(
 *   id = "resultado_formatter_type",
 *   label = @Translation("Resultado formatter type"),
 *   field_types = {
 *     "resultado_field_type"
 *   }
 * )
 */
class ResultadoFormatterType extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      // Implement default settings.
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    return [
      // Implement settings form.
    ] + parent::settingsForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    // Implement settings summary.

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    $entities_ejercicio_kdb = \Drupal::service('ejercicio_kdb_services')->getAllEjemploKdb();

    $operations = [];

    foreach ($entities_ejercicio_kdb as $index => $i) {
      $operations[$index] = ($i->dato_1 * 5) + ($i->dato_2 * 10);
    }

    foreach ($items as $delta => $item) {
      $elements[$delta] = ['#markup' => $operations];
    }

    return $elements;
  }

  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */
  protected function viewValue(FieldItemInterface $item) {
    // The text value has no text format assigned to it, so the user input
    // should equal the output, including newlines.
    return nl2br(Html::escape($item->value));
  }

}
