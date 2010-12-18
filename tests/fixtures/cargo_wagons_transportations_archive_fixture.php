<?php
/* CargoWagonsTransportationsArchive Fixture generated on: 2010-12-18 16:12:09 : 1292687829 */
class CargoWagonsTransportationsArchiveFixture extends CakeTestFixture {
	var $name = 'CargoWagonsTransportationsArchive';

	var $fields = array(
		'id_cargo_wagon' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_archivet_transportation' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_cargo_wagon' => 1,
			'id_archivet_transportation' => 1
		),
	);
}
?>