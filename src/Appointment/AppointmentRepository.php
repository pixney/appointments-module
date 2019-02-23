<?php namespace Pixney\AppointmentsModule\Appointment;

use Pixney\AppointmentsModule\Appointment\Contract\AppointmentRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class AppointmentRepository extends EntryRepository implements AppointmentRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var AppointmentModel
     */
    protected $model;

    /**
     * Create a new AppointmentRepository instance.
     *
     * @param AppointmentModel $model
     */
    public function __construct(AppointmentModel $model)
    {
        $this->model = $model;
    }
}
