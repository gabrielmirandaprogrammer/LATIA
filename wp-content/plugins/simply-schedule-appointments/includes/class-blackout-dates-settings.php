<?php
/**
 * Simply Schedule Appointments Blackout Dates Settings.
 *
 * @since   0.1.0
 * @package Simply_Schedule_Appointments
 */

/**
 * Simply Schedule Appointments Blackout Dates Settings.
 *
 * @since 0.1.0
 */
class SSA_Blackout_Dates_Settings extends SSA_Settings_Schema {
	/**
	 * Parent plugin class.
	 *
	 * @since 0.0.3
	 *
	 * @var   Simply_Schedule_Appointments
	 */
	protected $plugin = null;

	/**
	 * Constructor.
	 *
	 * @since  0.0.3
	 *
	 * @param  Simply_Schedule_Appointments $plugin Main plugin object.
	 */
	public function __construct( $plugin ) {
		parent::__construct();
		$this->plugin = $plugin;
		$this->hooks();
	}

	/**
	 * Initiate our hooks.
	 *
	 * @since  0.0.3
	 */
	public function hooks() {
		
	}

	protected $slug = 'blackout_dates';

	public function get_schema() {
		if ( !empty( $this->schema ) ) {
			return $this->schema;
		}

		$this->schema = array(
			'version' => '2018-02-20',
			'fields' => array(
				'enabled' => array(
					'name' => 'enabled',
					'default_value' => false,
				),

				'dates' => array(
					'name' => 'dates',
					'default_value' => array(),
					'required_capability' => 'ssa_manage_appointments',
				),

			),
		);

		return $this->schema;
	}
}
