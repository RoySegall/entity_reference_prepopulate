<?php

/**
 *
 */
namespace Drupal\entity_reference_prepopulate;

class EntityReferencePrePopulate {

  /**
   * Return a prepopulate plugin or a list of plugins.
   */
  public static function plugins($id = NULL) {
    $plugins = \Drupal::service('plugin.manager.prepopulate')->getDefinitions();

    if ($id) {
      return isset($plugins[$id]) ? $plugins[$id] : NULL;
    }

    return $plugins;
  }

  /**
   * Initialise a given prepopulate plugin.
   *
   * @param $id
   *  The prepopulate plugin ID.
   *
   * @return bool|EntityReferencePrePopulateAbstract
   *  A notify instance.
   */
  public static function plugin($id) {

    if (!self::plugins($id)) {
      return FALSE;
    }

    return \Drupal::service('plugin.manager.prepopulate')->createInstance($id);
  }
}