<?php

/**
* Harmony Thread selection handler.
*/
class ExampleSelectionHandler extends EntityReference_SelectionHandler_Generic {
  /**
   * Implements EntityReferenceHandler::getInstance().
   */
  public static function getInstance($field, $instance = NULL, $entity_type = NULL, $entity = NULL) {
    return new ExampleSelectionHandler($field, $instance, $entity_type, $entity);
  }

  /**
   * Build an EntityFieldQuery to get referenceable entities.
   */
  public function buildEntityFieldQuery($match = NULL, $match_operator = 'CONTAINS') {
    // Function which builds the EntityFieldQuery which searches the database for results
    // to supply to the field as options (e.g. Select or Autocomplete).
  }
}
