<?php namespace Pixney\AppointmentsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Pixney\AppointmentsModule\Appointment\Contract\AppointmentRepositoryInterface;
use Pixney\AppointmentsModule\Appointment\AppointmentRepository;
use Anomaly\Streams\Platform\Model\Appointments\AppointmentsAppointmentsEntryModel;
use Pixney\AppointmentsModule\Appointment\AppointmentModel;
use Illuminate\Routing\Router;

class AppointmentsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/appointments'           => 'Pixney\AppointmentsModule\Http\Controller\Admin\AppointmentsController@index',
        'admin/appointments/create'    => 'Pixney\AppointmentsModule\Http\Controller\Admin\AppointmentsController@create',
        'admin/appointments/edit/{id}' => 'Pixney\AppointmentsModule\Http\Controller\Admin\AppointmentsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Pixney\AppointmentsModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Pixney\AppointmentsModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Pixney\AppointmentsModule\Event\ExampleEvent::class => [
        //    Pixney\AppointmentsModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Pixney\AppointmentsModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        AppointmentsAppointmentsEntryModel::class => AppointmentModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        AppointmentRepositoryInterface::class => AppointmentRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
