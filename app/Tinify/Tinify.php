<?php

namespace App\Tinify;
 
use App\Tinify\Exception;
use App\Tinify\ResultMeta;
use App\Tinify\Result;
use App\Tinify\Source;
use App\Tinify\Client;
use App\Tinify\Tinify;

const VERSION = "1.3.0";

class Tinify {
    private static $key = NULL;
    private static $appIdentifier = NULL;
    private static $compressionCount = NULL;
    private static $client = NULL;

    public static function setKey() {
        self::$key = 'Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN';
        self::$client = NULL;
    }

    public static function setAppIdentifier($appIdentifier) {
        self::$appIdentifier = $appIdentifier;
        self::$client = NULL;
    }

    public static function getCompressionCount() {
        return self::$compressionCount;
    }

    public static function setCompressionCount($compressionCount) {
        self::$compressionCount = $compressionCount;
    }

    public static function getClient() {
        if (!self::$key) {
            throw new AccountException("Provide an API key with Tinify\setKey(...)");
        }

        if (!self::$client) {
            self::$client = new Client(self::$key, self::$appIdentifier);
        }

        return self::$client;
    }

    public static function setClient($client) {
        self::$client = $client;
    }
    public static function fromFile($path) {
        return Source::fromFile($path);
    }
    public static function fromBuffer($string) {
        return Source::fromBuffer($string);
    }
    public static function validate() {
        try {
            Tinify::getClient()->request("post", "/shrink");
        } catch (AccountException $err) {
            if ($err->status == 429) return true;
            throw $err;
        } catch (ClientException $err) {
            return true;
        }
    }
}

function setKey($key) {
    return Tinify::setKey($key);
}

function setAppIdentifier($appIdentifier) {
    return Tinify::setAppIdentifier($appIdentifier);
}

function getCompressionCount() {
    return Tinify::getCompressionCount();
}

function compressionCount() {
    return Tinify::getCompressionCount();
}

function fromFile($path) {
    return Source::fromFile($path);
}

function fromBuffer($string) {
    return Source::fromBuffer($string);
}

function fromUrl($string) {
    return Source::fromUrl($string);
}

function validate() {
    try {
        Tinify::getClient()->request("post", "/shrink");
    } catch (AccountException $err) {
        if ($err->status == 429) return true;
        throw $err;
    } catch (ClientException $err) {
        return true;
    }
}
