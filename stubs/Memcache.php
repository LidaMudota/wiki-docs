<?php
/**
 * Stub for Memcache extension (for IDE autocomplete)
 * Реализация пустая, только для подсветки и intellisense.
 */

class Memcache
{
    public function connect(string $host, int $port = 11211, int $timeout = 1): bool {
        return true;
    }

    public function add(string $key, $var, int $flag = 0, int $expire = 0): bool {
        return true;
    }

    public function set(string $key, $var, int $flag = 0, int $expire = 0): bool {
        return true;
    }

    public function get(string $key, int $flags = 0) {
        return null;
    }

    public function delete(string $key, int $timeout = 0): bool {
        return true;
    }

    public function flush(): bool {
        return true;
    }

    public function close(): bool {
        return true;
    }
}
