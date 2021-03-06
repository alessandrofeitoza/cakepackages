<?php
/**
 * TaggedFixture
 */
class TaggedFixture extends CakeTestFixture {

/**
 * Name
 *
 * @var string $name
 */
	public $name = 'Tagged';

/**
 * Table
 *
 * @var string name$table
 */
	public $table = 'tagged';

/**
 * Fields
 *
 * @var array $fields
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
		'foreign_key' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36),
		'tag_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36),
		'model' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index'),
		'language' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6),
		'times_tagged' => array('type' => 'integer', 'null' => false, 'default' => 1),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'UNIQUE_TAGGING' => array('column' => array('model', 'foreign_key', 'tag_id', 'language'), 'unique' => 1),
			'INDEX_TAGGED' => array('column' => 'model', 'unique' => 0),
			'INDEX_LANGUAGE' => array('column' => 'language', 'unique' => 0)
		)
	);

/**
 * Records
 *
 * @var array $records
 */
	public $records = array(
		array(
			'id' => '49357f3f-c464-461f-86ac-a85d4a35e6b6',
			'foreign_key' => 1,
			'tag_id' => 'tag-1', // model
			'model' => 'Package',
			'language' => 'eng',
			'created' => '2008-12-02 12:32:31 ',
			'modified' => '2008-12-02 12:32:31',
		),
		array(
			'id' => '49357f3f-c464-461f-86ac-a85d4a35e6b7',
			'foreign_key' => 2,
			'tag_id' => 'tag-1', // model
			'model' => 'Package',
			'language' => 'eng',
			'created' => '2008-12-02 12:32:31 ',
			'modified' => '2008-12-02 12:32:31',
		),
		array(
			'id' => '49357f3f-c66c-4300-a128-a85d4a35e6b6',
			'foreign_key' => 1,
			'tag_id' => 'tag-2', // theme
			'model' => 'Package',
			'language' => 'eng',
			'created' => '2008-12-02 12:32:31 ',
			'modified' => '2008-12-02 12:32:31',
		),
	);
}
