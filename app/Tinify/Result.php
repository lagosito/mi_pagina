<?php

namespace App\Tinify;

use App\Tinify\Exception;
use App\Tinify\ResultMeta;
use App\Tinify\Result;
use App\Tinify\Source;
use App\Tinify\Client;
use App\Tinify\Tinify;

class Result extends ResultMeta {
    protected $data;

    public function __construct($meta, $data) {
        $this->meta = $meta;
        $this->data = $data;
    }

    public function data() {
        return $this->data;
    }

    public function toBuffer() {
        return $this->data;
    }

    public function toFile($path) {
        return file_put_contents($path, $this->toBuffer());
    }

    public function size() {
        return intval($this->meta["content-length"]);
    }

    public function mediaType() {
        return $this->meta["content-type"];
    }

    public function contentType() {
        return $this->mediaType();
    }
}
