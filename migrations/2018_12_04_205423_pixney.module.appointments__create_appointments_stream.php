<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyModuleAppointmentsCreateAppointmentsStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'          => 'appointments',
         'title_column' => 'name',
         'translatable' => false,
         'trashable'    => false,
         'searchable'   => false,
         'sortable'     => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'required'     => true,
        ],
        'name'       => [
            'required'=> false,
        ],
        'company'    => [
            'required'=> false,
        ],
        'email'      => [
            'required'=> false,
        ],
        'phone'      => [
            'required'=> false,
        ],
        'title'      => [
            'required'=> false,
        ],
        'attendee'   => [
            'required'=> false,
        ],
    ];
}
