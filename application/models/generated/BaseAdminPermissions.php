<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdminPermissions', 'doctrine');

/**
 * BaseAdminPermissions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $permission_id
 * @property integer $resource_id
 * @property integer $role_id
 * @property string $permission
 * @property AdminResources $AdminResources
 * @property AdminRoles $AdminRoles
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdminPermissions extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('admin_permissions');
        $this->hasColumn('permission_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('resource_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('role_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('permission', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '250',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AdminResources', array(
             'local' => 'resource_id',
             'foreign' => 'resource_id'));

        $this->hasOne('AdminRoles', array(
             'local' => 'role_id',
             'foreign' => 'role_id'));
    }
}