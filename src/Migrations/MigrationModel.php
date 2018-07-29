<?php namespace Ahsan\Neoquent\Migrations;

use Ahsan\Neoquent\Eloquent\Model as NeoEloquent;

class MigrationModel extends NeoEloquent {

    /**
     * {@inheritDoc}
     */
    protected $label = 'NeoEloquentMigration';

    /**
     * {@inheritDoc}
     */
    protected $fillable = array(
        'migration',
        'batch'
    );

    /**
     * {@inheritDoc}
     */
    protected $guarded = array();

}
