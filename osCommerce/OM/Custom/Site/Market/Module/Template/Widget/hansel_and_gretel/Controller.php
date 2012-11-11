<?php
/**
 * osCommerce Website
 * 
 * @copyright Copyright (c) 2012 osCommerce; http://www.oscommerce.com
 * @license BSD License; http://www.oscommerce.com/bsdlicense.txt
 */

  namespace osCommerce\OM\Core\Site\Market\Module\Template\Widget\hansel_and_gretel;

  use osCommerce\OM\Core\OSCOM;

  class Controller extends \osCommerce\OM\Core\Template\WidgetAbstract {
    static public function execute($param = null) {
      $file = OSCOM::BASE_DIRECTORY . 'Custom/Site/' . OSCOM::getSite() . '/Module/Template/Widget/hansel_and_gretel/pages/main.html';

      if ( !file_exists($file) ) {
        $file = OSCOM::BASE_DIRECTORY . 'Core/Site/' . OSCOM::getSite() . '/Module/Template/Widget/hansel_and_gretel/pages/main.html';
      }

      return file_get_contents($file);
    }
  }
?>
