<?php
class InternalMigrateBooks extends ZN\Database\InternalMigration
{
	//--------------------------------------------------------------------------------------------------------
	// Class/Table Name
	//--------------------------------------------------------------------------------------------------------
	const table = __CLASS__;

	//--------------------------------------------------------------------------------------------------------
	// Up
	//--------------------------------------------------------------------------------------------------------
	public function up()
	{
		// Default Query
		$this->createTable
		([
		    "id"        => [DB::int(11), DB::primaryKey(), DB::autoIncrement()],
		    "name"      => [DB::varchar(255), DB::notNull()],
		    "author"    => [DB::varchar(255)]
		]);
	}

	//--------------------------------------------------------------------------------------------------------
	// Down
	//--------------------------------------------------------------------------------------------------------
	public function down()
	{
		// Default Query
		$this->dropTable();
	}
}