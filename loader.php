<?php
/**
 * Abstraction classes for coding WordPress admin UIs
 * This works only to create the admin pages. It does not (yet?) create/save settings, inputs, etc.
 *
 * @package   Simple Admin UI
 * @author    Ren Ventura <https://renventura.com>
 * @version   1.0.0
 * @copyright Copyright (c) 2017, Ren Ventura
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 *
 */

namespace RenVentura\SimpleAdminUI;

// Load the class files
include_once 'classes/class-admin-pages.php';
include_once 'classes/class-admin-page.php';
include_once 'classes/class-help-tabs.php';
include_once 'classes/class-register-meta-boxes.php';