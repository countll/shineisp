<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EmailsTemplatesData', 'doctrine');

/**
 * BaseEmailsTemplatesData
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $template_id
 * @property integer $language_id
 * @property string $fromname
 * @property string $fromemail
 * @property string $subject
 * @property string $html
 * @property string $text
 * @property EmailsTemplates $EmailsTemplates
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmailsTemplatesData extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('emails_templates_data');
        $this->hasColumn('id', 'integer', 5, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '5',
             ));
        $this->hasColumn('template_id', 'integer', 5, array(
             'type' => 'integer',
             'unsigned' => true,
             'length' => '5',
             ));
        $this->hasColumn('language_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'length' => '4',
             ));
        $this->hasColumn('fromname', 'string', 150, array(
             'type' => 'string',
             'length' => '150',
             ));
        $this->hasColumn('fromemail', 'string', 150, array(
             'type' => 'string',
             'length' => '150',
             ));
        $this->hasColumn('subject', 'string', 150, array(
             'type' => 'string',
             'length' => '150',
             ));
        $this->hasColumn('html', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '',
             ));
        $this->hasColumn('text', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('EmailsTemplates', array(
             'local' => 'template_id',
             'foreign' => 'template_id',
             'onDelete' => 'CASCADE'));
    }
}