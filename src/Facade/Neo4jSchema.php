<?php namespace Ahsan\Neoquent\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahsan\Neoquent\Schema\Builder
 */
class Neo4jSchema extends Facade {

    /**
     * Get a schema builder instance for a connection.
     *
     * @param  string  $name
     * @return \Ahsan\Neoquent\Schema\Builder
     */
    public static function connection($name)
    {
        return static::$app['db']->connection($name)->getSchemaBuilder();
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['db']->connection()->getSchemaBuilder();
    }

}
