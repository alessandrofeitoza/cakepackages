<?php
class M4f00d72c6c7c4a169e82485675f6eb26 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @public array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'maintainers' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'collate' => null, 'comment' => ''),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'email' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'name' => array('type' => 'string', 'null' => true, 'length' => 50, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'alias' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'twitter_username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'company' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'location' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'gravatar_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'username' => array('column' => 'username', 'unique' => 1),
						'name' => array('column' => 'name', 'unique' => 0),
						'activation_key' => array('column' => 'activation_key', 'unique' => 0),
						'user_id' => array('column' => 'user_id', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'packages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'collate' => null, 'comment' => ''),
					'maintainer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => null, 'comment' => ''),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'repository_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'bakery_article' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'homepage' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'description' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'tags' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => null, 'comment' => ''),
					'open_issues' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'forks' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'watchers' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'collaborators' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contributors' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'created_at' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'last_pushed_at' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => null, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'contains_model' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_view' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_controller' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_behavior' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_helper' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_component' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_shell' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_theme' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_datasource' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_vendor' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_test' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_lib' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_resource' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_config' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'contains_app' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'deleted' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => null, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'deleted' => array('column' => array('deleted', 'maintainer_id'), 'unique' => 0),
						'view' => array('column' => array('deleted', 'name', 'maintainer_id', 'category_id'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_details' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'position' => array('type' => 'float', 'null' => false, 'default' => '1', 'collate' => null, 'comment' => ''),
					'field' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'value' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'input' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'data_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'label' => array('type' => 'string', 'null' => false, 'length' => 128, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'UNIQUE_PROFILE_PROPERTY' => array('column' => array('field', 'user_id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'users' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'username' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'slug' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'passwd' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'password_token' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'email' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'email_authenticated' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'collate' => null, 'comment' => ''),
					'email_token' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'email_token_expires' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'tos' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'collate' => null, 'comment' => ''),
					'active' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'collate' => null, 'comment' => ''),
					'last_login' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'last_activity' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'is_admin' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'collate' => null, 'comment' => ''),
					'role' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'collate' => null, 'comment' => ''),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'BY_USERNAME' => array('column' => array('username', 'passwd'), 'unique' => 0),
						'BY_EMAIL' => array('column' => array('email', 'passwd'), 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'maintainers', 'packages', 'user_details', 'users'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
