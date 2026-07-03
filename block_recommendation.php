<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Block recommendation is defined here.
 *
 * @package     block_recommendation
 * @copyright   2025 Your Name <you@example.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_recommendation extends block_base
{

    /**
     * Initializes class member variables.
     */
    public function init()
    {
        // Needed by Moodle to differentiate between blocks.
        $this->title = get_string('pluginname', 'block_recommendation');
    }

    /**
     * Returns the block contents.
     *
     * @return stdClass The block contents.
     */
    public function get_content()
    {

        global $OUTPUT;
        if ($this->content !== null) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        $html = !empty($this->config->htmlcontent['text'])
            ? $this->config->htmlcontent['text']
            : $this->get_default_htmlcontent()['text'];

        $data = ['config_htmlcontent' => $html];

        $this->content = new stdClass();
        $this->content->text = $OUTPUT->render_from_template('block_recommendation/recommendation', $data);
        $this->content->footer = '';

        return $this->content;
    }

    /**
     * Defines configuration data.
     *
     * The function is called immediately after init().
     */
    public function specialization()
    {
        // Load user defined title and make sure it's never empty.
        $this->title = '';
    }

    /**
     * Sets the applicable formats for the block.
     *
     * @return string[] Array of pages and permissions.
     */
    public function applicable_formats()
    {
        return [
            'admin' => false,
            'site-index' => true,
            'course-view' => false,
            'mod' => false,
            'my' => true,
        ];
    }

    /**
     * Retorna o conteúdo HTML padrão do bloco.
     *
     * @return array
     */
    public function get_default_htmlcontent(): array
    {
        return [
            'text' => '',
            'format' => FORMAT_HTML
        ];
    }
}