<?php

namespace Dhl\Auth\Cache;

/**
 * Class FileCache
 *
 * @package Dhl\Auth\Cache
 */
class FileCache implements CacheInterface
{

    /**
     * The file mode.
     *
     * @var string
     */
    protected $fileMode = 0644;

    /**
     * The file mode.
     *
     * @var string
     */
    protected $dirMode = 0777;

    /**
     * The cache path.
     *
     * @var string
     */
    protected $path = '/tmp';

    /**
     * The file format string
     *
     * @var string
     */
    protected $fileFormat;

    /**
     * Constructor.
     *
     * @param string $path
     * @param string $fileFormat
     * @param int $fileMode
     * @param int $dirMode
     */
    public function __construct($path, $fileFormat = '%s.cache', $fileMode = 0600, $dirMode = 0777)
    {
        if (!is_int($fileMode)) {
            throw new \InvalidArgumentException(sprintf(
                'The umask parameter is required to be integer, was: %s',
                gettype($fileMode)
            ));
        }

        clearstatcache();
        if (!$this->createWritablePathIfNotExists($path)) {
            throw new \InvalidArgumentException(sprintf(
                'The directory "%s" does not exist and could not be created.',
                $path
            ));
        }

        $this->path = realpath($path);
        $this->fileFormat = $fileFormat;
    }

    /**
     * Fetches an entry from the cache or returns false if not exists.
     *
     * @param string $id
     *
     * @return string|false
     */
    public function fetch($id)
    {
        if (!file_exists($this->filename($id))) {
            return false;
        }

        $filedata = file_get_contents($this->filename($id));
        $data = json_decode($filedata, true);
        if ($data['ttl'] !== null) {
            if (($data['time'] + $data['ttl']) < time()) {
                return false;
            }
        }

        return $data['data'];
    }

    /**
     * Puts data into the cache.
     *
     * @param string $id
     * @param string $data
     * @param int $ttl
     *
     * @return bool
     */
    public function save($id, $data, $ttl = null)
    {
        $filedata = [
            'time' => time(),
            'ttl' => $ttl,
            'data' => $data,
        ];
        return false !== file_put_contents($this->filename($id), json_encode($filedata), LOCK_EX);
    }


    /**
     * @param string $id
     * @return string
     */
    private function filename($id)
    {
        return sprintf('%s/%s', $this->path, sprintf($this->fileFormat, $id));
    }

    /**
     * Create path if needed.
     *
     * @param string $path
     * @return bool
     */
    private function createWritablePathIfNotExists($path)
    {
        if (!is_dir($path)) {
            // check if parentdir exists, and create this first.
            $parentdir = dirname($path);
            if (!is_dir($parentdir)) {
                $this->createWritablePathIfNotExists($parentdir);
            }

            if (!is_writable($parentdir)) {
                throw new \InvalidArgumentException(sprintf(
                    'The parent directory "%s" is not writable.',
                    $parentdir
                ));
            }
            if (!mkdir($path, $this->dirMode)) {
                return false;
            }
        }

        if (!is_writable($path)) {
            throw new \InvalidArgumentException(sprintf(
                'The path "%s" is not writable.',
                $path
            ));
        }

        return true;
    }
}
