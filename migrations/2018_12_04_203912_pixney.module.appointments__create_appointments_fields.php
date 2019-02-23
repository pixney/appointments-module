<?php
/**
 * Class 2018_12_04_203912_pixney.module.appointments__create_appointments_fields
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *
 *  @link https://pixney.com
 */
use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyModuleAppointmentsCreateAppointmentsFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'       => 'anomaly.field_type.text',
        'company'    => 'anomaly.field_type.text',
        'email'      => 'anomaly.field_type.text',
        'phone'      => 'anomaly.field_type.text',
        'title'      => 'anomaly.field_type.text',
        'attendee'   => 'anomaly.field_type.text',
    ];
}
