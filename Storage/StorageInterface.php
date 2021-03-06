<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\TranslationsBundle\Storage;

/**
 * Interface is used to define default translations storage behaviour.
 */
interface StorageInterface
{
    /**
     * Returns translations from storage.
     *
     * @param array $locales
     * @param array $domains
     *
     * @return array|\Traversable
     */
    public function read($locales, $domains);

    /**
     * Writes translations into storage.
     *
     * @param array $translations Translations from domain.
     */
    public function write(array $translations);
}
