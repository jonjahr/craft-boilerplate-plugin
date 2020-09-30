<?php
/**
 * Bukwild Craft Boilerplate plugin for Craft CMS 3.x
 *
 * Bukwild Craft Boilerplate
 *
 * @link      bukwild.com
 * @copyright Copyright (c) 2020 Bukwild
 */

namespace bukwild\bukwildcraftboilerplate;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class BukwildCraftBoilerplate
 *
 * @author    Bukwild
 * @package   BukwildCraftBoilerplate
 * @since     1.0.0
 *
 */
class BukwildCraftBoilerplate extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var BukwildCraftBoilerplate
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'bukwild-craft-boilerplate',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
