<?php

namespace Drupal\beacon;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Event entity.
 *
 * @see \Drupal\beacon\Entity\Event.
 */
class EventAccessControlHandler extends BeaconEntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    // TODO
   return parent::checkAccess($entity, $operation, $account);
    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    // TODO
    return AccessResult::allowedIfHasPermission($account, 'add event entities');
  }

}
