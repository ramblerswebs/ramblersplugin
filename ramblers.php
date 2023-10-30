<?php

/**
 * @copyright   Copyright (C) 2022 Derby & SOuth Derbyshire Ramblers
 * @license     GNU General Public License version 2 or later.
 * @author      Chris Vaughan - Derby & SOuth Derbyshire Ramblers
 */
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin as JPlugin;

/**
 * Plugin to register the Ramblers Library extension
 *
 * @package     Joomla.plugin
 * @subpackage  System.ramblers
 */
class plgSystemRamblers extends JPlugin {

    /**
     * Method to register custom library.
     *
     * return  void
     */
    public function onAfterInitialise() {
        if (file_exists(JPATH_LIBRARIES . '/ramblers')) {
            JLoader::registerPrefix('R', JPATH_LIBRARIES . '/ramblers');
        }
    }
}