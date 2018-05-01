<?php

namespace Dhl\Auth\Cache;

interface CacheInterface
{
    /**
     * Fetches an entry from the cache or returns false if not exists.
     *
     * @param string $id
     *
     * @return mixed|false
     */
    public function fetch($id);

    /**
     * Puts data into the cache.
     *
     * @param string $id
     * @param string $data
     * @param int $ttl
     *
     * @return bool
     */
    public function save($id, $data, $ttl = null);
}