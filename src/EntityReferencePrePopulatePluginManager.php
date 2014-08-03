<?php

/**
 * @file
 * Contains \Drupal\message_notify\Plugin\MessageNotifyPluginManager.
 */

namespace Drupal\entity_reference_prepopulate;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Manages Person plugins.
 */
class EntityReferencePrePopulatePluginManager extends DefaultPluginManager {

  /**
   * Constructs a PrePopulate object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/PrePopulate', $namespaces, $module_handler, 'Drupal\entity_reference_prepopulate\Annotation\prepopulate');
    $this->alterInfo('message_notifier_alter');
    $this->setCacheBackend($cache_backend, 'entity_reference_prepopulate_plugins');
  }

}