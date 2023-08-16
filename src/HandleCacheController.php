<?php

namespace CacheDriver;

use App\Http\Controllers\Controller;

class HandleCacheController extends Controller
{
    public $collectionCache;

    public function __construct($driver = 'file')
    {
        $this->collectionCache = [];
        $this->collectionCache['driver'] = $driver;
    }

    public function setConnection($connection)
    {
        $this->collectionCache['connection'] = $connection;
    }

    public function setSerialize($serialize)
    {
        $this->collectionCache['serialize'] = $serialize;
    }

    public function setLockConnection($connection)
    {
        $this->collectionCache['lock_connection'] = $connection;
    }

    public function modify()
    {

    }
    public function __destruct()
    {
        $this->collectionCache = [];
    }
}