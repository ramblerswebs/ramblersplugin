<?php
/**
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later.
 */
 
defined('_JEXEC') or die;
 
/**
 * Mylib plugin class.
 *
 * @package     Joomla.plugin
 * @subpackage  System.mylib
 */
class plgSystemRamblers extends JPlugin
{
    /**
     * Method to register custom library.
     *
     * return  void
     */
    public function onAfterInitialise()
    {
        if (file_exists(JPATH_BASE . '/ramblers')) {
              JLoader::registerPrefix('R', JPATH_BASE . '/ramblers');
        }
    }
}
