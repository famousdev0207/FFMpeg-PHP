<?php

namespace FFMpeg\Format;

interface VideoFormat extends AudioFormat
{

    public function getWidth();

    public function getHeight();

    public function getFrameRate();

    public function getVideoCodec();

    public function getGOPSize();

}