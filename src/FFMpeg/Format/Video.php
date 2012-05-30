<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Format;

/**
 * The base video interface
 * 
 * @author Romain Neutron imprec@gmail.com
 */
interface Video extends Audio
{

    /**
     * Returns the video codec
     *
     * @return string
     */
    public function getVideoCodec();
}
