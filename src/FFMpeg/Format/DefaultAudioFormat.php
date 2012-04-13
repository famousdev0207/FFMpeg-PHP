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
 * The abstract default Audio format
 *
 * @author Romain Neutron imprec@gmail.com
 */
abstract class DefaultAudioFormat implements AudioFormat
{

    protected $audioCodec;
    protected $audioSampleRate = 44100;
    protected $kiloBitrate     = 128;

    /**
     * Returns extra parameters for the encoding
     *
     * @return string
     */
    public function getExtraParams()
    {
        return '';
    }

    /**
     * Returns the audio codec
     *
     * @return string
     */
    public function getAudioCodec()
    {
        return $this->audioCodec;
    }

    /**
     * Set the audio codec, Should be in the available ones, otherwise an
     * exception is thrown
     *
     * @param string $audioCodec
     * @throws \InvalidArgumentException
     */
    public function setAudioCodec($audioCodec)
    {
        if ( ! in_array($audioCodec, $this->getAvailableAudioCodecs()))
        {
            throw new \InvalidArgumentException('Wrong audiocodec value');
        }

        $this->audioCodec = $audioCodec;
    }

    /**
     * Get the audio sample rate
     *
     * @return type
     */
    public function getAudioSampleRate()
    {
        return $this->audioSampleRate;
    }

    /**
     * Set the audio sample rate
     *
     * @param int $audioSampleRate
     * @throws \InvalidArgumentException
     */
    public function setAudioSampleRate($audioSampleRate)
    {
        if ($audioSampleRate < 1)
        {
            throw new \InvalidArgumentException('Wrong audio sample rate value');
        }

        $this->audioSampleRate = (int) $audioSampleRate;
    }

    /**
     * Get the kiloBitrate value
     *
     * @return int
     */
    public function getKiloBitrate()
    {
        return $this->kiloBitrate;
    }

    /**
     * Set the kiloBitrate value
     *
     * @param int $kiloBitrate
     * @throws \InvalidArgumentException
     */
    public function setKiloBitrate($kiloBitrate)
    {
        if ($kiloBitrate < 1)
        {
            throw new \InvalidArgumentException('Wrong kiloBitrate value');
        }

        $this->kiloBitrate = (int) $kiloBitrate;
    }

    /**
     * Returns the list of available audio codecs for this format
     *
     * @return array
     */
    abstract public function getAvailableAudioCodecs();

}
