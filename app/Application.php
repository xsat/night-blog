<?php

namespace App;

/**
 * Class Application
 */
class Application
{
    public function run(): void
    {
        echo $this->getParticle('index');
    }

    /**
     * @param string $name
     * @return null|string
     */
    private function getParticle(string $name): ?string
    {
        ob_start();

        include_once __DIR__ .
            DIRECTORY_SEPARATOR . 'View' .
            DIRECTORY_SEPARATOR . $name . '.phtml';

        return ob_get_clean();
    }

    /**
     * @return null|string
     */
    protected function getTitle(): ?string
    {
        return null;
    }

    /**
     * @return null|string
     */
    protected function getContent(): ?string
    {
        return $this->getParticle('list');
    }
}
