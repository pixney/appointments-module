<?php namespace Pixney\AppointmentsModule\Http\Controller\Admin;

use Pixney\AppointmentsModule\Appointment\Form\AppointmentFormBuilder;
use Pixney\AppointmentsModule\Appointment\Table\AppointmentTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class AppointmentsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param AppointmentTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(AppointmentTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param AppointmentFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(AppointmentFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param AppointmentFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AppointmentFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
