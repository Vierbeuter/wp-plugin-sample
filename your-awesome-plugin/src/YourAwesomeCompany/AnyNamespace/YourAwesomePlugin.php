<?php

namespace YourAwesomeCompany\AnyNamespace;

use Vierbeuter\WordPress\Plugin;
use YourAwesomeCompany\AnyNamespace\Feature\TestFeature;

/**
 * The YourAwesomePlugin class represents the YourAwesomePlugin plugin.
 *
 * @package YourAwesomeCompany\AnyNamespace
 */
class YourAwesomePlugin extends Plugin
{

    /**
     * Initializes the plugin, e.g. adds features or services using the addFeature(…) and addComponent(…) methods.
     *
     * Example implementation:
     *
     * <code>
     * protected function initPlugin(): void
     * {
     *   //  add an awesome feature
     *   $this->addFeature(new AwesomeFeature());
     *   //  register an awesome service to DI-container
     *   $this->addComponent('service-handle', new AwesomeService());
     * }
     * </code>
     *
     * @see \Vierbeuter\WordPress\Plugin::addFeature()
     * @see \Vierbeuter\WordPress\Plugin::addComponent()
     */
    protected function initPlugin(): void
    {
        //  register test feature
        $this->addFeature(new TestFeature());
    }
}
