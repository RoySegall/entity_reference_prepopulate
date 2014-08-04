<?php

namespace Drupal\entity_reference_prepopulate\Plugin\PrePopulate;

use Drupal\entity_reference_prepopulate\EntityReferencePrePopulateAbstract;

/**
 * Redirects to a message deletion form.
 *
 * @PrePopulate(
 *  id = "default_prepopulate",
 *  label = @Translation("Default prepopulate"),
 * )
 */
class DefaultPrePopulate extends EntityReferencePrePopulateAbstract {
}