<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_events_table extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
		$this->load->dbforge();
	}
	
	public function up()
	{
	    $fields = array(
            'id' => array(
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment' => TRUE
            )
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('SET_YOUR_TABLE_HERE', TRUE);
    }
    
	public function down()
	{
	    $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20180611062827_create_events_table' */
/* Location: .//var/www/html/application/migrations/20180611062827_create_events_table.php */
