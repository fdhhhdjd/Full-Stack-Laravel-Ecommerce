<?php

use Illuminate\Support\Facades\Redis;
//! Connect redis
function connect_redis()
{
    return Redis::connection();
}
//! Delete Cache redis
function Delete_cache($name_cache)
{
    $redis = connect_redis();

    $redis->del($name_cache);
}
//! Set Redis
function SetCache($name_cache, $data)
{
    $redis = connect_redis();
    $redis->set(
        $name_cache,
        json_encode(
            $data
        )
    );
}
//!Get Redis
function GetCache($name_cache)
{
    $redis = connect_redis();
    $response = $redis->get($name_cache);
    return json_decode($response);
}
