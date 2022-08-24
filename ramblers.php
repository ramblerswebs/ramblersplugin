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
class plgSystemRamblers extends JPlugin {

    /**
     * Method to register custom library.
     *
     * return  void
     */
    public function onAfterInitialise() {
        if (file_exists(JPATH_SITE . '/ramblers')) {
            rename(JPATH_SITE . '/ramblers', JPATH_SITE . '/ramblersOLD');
        }
        if (file_exists(JPATH_LIBRARIES . '/ramblers')) {
            JLoader::registerPrefix('R', JPATH_LIBRARIES . '/ramblers');
            if (file_exists(JPATH_SITE . '/ramblersOLD')) {
                $this->xrmdir(JPATH_SITE . '/ramblersOLD');
            }
        }
    }

    function xrmdir($dir) {
        $items = scandir($dir);
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            $path = $dir . '/' . $item;
            if (is_dir($path)) {
                $this->xrmdir($path);
            } else {
                unlink($path);
            }
        }
        rmdir($dir);
    }

}
