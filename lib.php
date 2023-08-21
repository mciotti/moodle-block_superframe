<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Callback functions for block_superframe.
 *
 * @package block_superframe
 * @copyright 2018 Richard Jones
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function block_superframe_extend_navigation_course($navigation, $course, $context) {
    $url = new moodle_url('/blocks/superframe/block_data.php');
    $userlink = get_string('userlink', 'block_superframe');
    $navigation->add($userlink, $url, navigation_node::TYPE_SETTING,
        $userlink, 'superframe',
        new pix_icon('icon', '', 'block_superframe'));
}

function block_superframe_myprofile_navigation(core_user\output\myprofile\tree $tree,
    $user, $iscurrentuser, $course) {

    $url = new moodle_url('/blocks/superframe/block_data.php');
    $node = new core_user\output\myprofile\node('miscellaneous', 'superframe',
        get_string('userlink', 'block_superframe'), null, $url);
    $tree->add_node($node);
}