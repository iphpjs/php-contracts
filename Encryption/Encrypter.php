<?php

/*
 * This file is part of the Iphpjs package.
 *
 * (c) NetworkRanger <admin@iphpjs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Iphpjs\Contracts\Encryption;

interface Encrypter
{
    /**
     * Encrypt the given value.
     *
     * @param mixed $value
     * @param bool $serialize
     * @return string
     *
     * @throws \Iphpjs\Contracts\Encryption\EncryptException
     */
    public function encrypt(string $value, bool $serialize = true): string;

    /**
     * Decrypt the given value.
     *
     * @param string $payload
     * @param bool $unserialize
     * @return mixed
     *
     * @throws \Iphpjs\Contracts\Encryption\DecryptException
     */
    public function decrypt(string $payload, bool $unserialize = true): string;
}
