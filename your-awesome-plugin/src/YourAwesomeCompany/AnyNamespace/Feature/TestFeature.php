<?php

namespace YourAwesomeCompany\AnyNamespace\Feature;

use Vierbeuter\WordPress\Feature\Feature;

/**
 * Our first feature implementation to play around with.
 *
 * @package YourAwesomeCompany\AnyNamespace\Feature
 */
class TestFeature extends Feature
{

    /**
     * Returns a list of actions to be hooked into by this class. For each hook there <strong>must</strong> be defined a
     * public method with the same name as the hook (unless the hook's name consists of hyphens "-", for the appropriate
     * method name underscores "_" have to be used).
     *
     * Valid entries of the returned array are single strings, key-value-pairs and arrays. See comments in the method's
     * default implementation.
     *
     * @return string[]|array
     */
    protected function getActionHooks(): array
    {
        return [
            /** @see \YourAwesomeCompany\AnyNamespace\Feature\TestFeature::wp_loaded() */
            'wp_loaded',
        ];
    }

    /**
     * Action hook implementation for "wp_loaded".
     *
     * Adds a test message.
     *
     * @see https://codex.wordpress.org/Plugin_API/Action_Reference/wp_loaded
     */
    public function wp_loaded(): void
    {
        //  we need to pass a callback method, see method implementation below
        $this->addMessage([$this, 'printSuccess']);
    }

    /**
     * Callback method for printing success message.
     *
     * @see \YourAwesomeCompany\AnyNamespace\Feature\TestFeature::wp_loaded()
     */
    public function printSuccess(): void
    {
        echo $this->getMessageMarkupSuccess('It works!', true);
    }
}
