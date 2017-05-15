<?php

namespace App\Tinify;

use App\Tinify\Exception;
use App\Tinify\ResultMeta;
use App\Tinify\Result;
use App\Tinify\Source;
use App\Tinify\Client;
use App\Tinify\Tinify;

use Illuminate\Support\Facades\URL;
class ResultMeta {
    protected $meta;

    public function __construct($meta) {
        $this->meta = $meta;
    }

    public function width() {
        return intval($this->meta["image-width"]);
    }

    public function height() {
        return intval($this->meta["image-height"]);
    }

    public function location() {
        return isset($this->meta["location"]) ? $this->meta["location"] : null;
    }
}
