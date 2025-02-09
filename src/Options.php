<?php

/**
 * FreeIPA library for PHP
 * Copyright (C) 2015-2019 Tobias Sette <me@tobias.ws>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Pugovok\FreeIpa;

class Options
{
    private string $host;
    private string $certificatePath;
    private string $primaryUrl;
    private ?string $apiVersion;

    public function __construct(
        string $host,
        string $certificatePath,
        string $primaryUrl = null,
        string $apiVersion = null
    ) {
        if ($primaryUrl === null) {
            $primaryUrl = sprintf('https://%s/ipa', $host);
        }
        if ($apiVersion === null) {
            $apiVersion = '2.233';
        }

        $this->host            = $host;
        $this->certificatePath = $certificatePath;
        $this->primaryUrl      = $primaryUrl;
        $this->apiVersion      = $apiVersion;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getCertificatePath(): string
    {
        return $this->certificatePath;
    }

    public function getPrimaryUrl(): string
    {
        return $this->primaryUrl;
    }

    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }
}
