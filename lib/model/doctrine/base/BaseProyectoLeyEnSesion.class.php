<?php

/**
 * BaseProyectoLeyEnSesion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_sesion
 * @property integer $id_proyecto_ley
 * 
 * @method integer             getIdSesion()        Returns the current record's "id_sesion" value
 * @method integer             getIdProyectoLey()   Returns the current record's "id_proyecto_ley" value
 * @method ProyectoLeyEnSesion setIdSesion()        Sets the current record's "id_sesion" value
 * @method ProyectoLeyEnSesion setIdProyectoLey()   Sets the current record's "id_proyecto_ley" value
 * 
 * @package    vota
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7021 2010-01-12 20:39:49Z lsmith $
 */
abstract class BaseProyectoLeyEnSesion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ProyectoLeyEnSesion');
        $this->hasColumn('id_sesion', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('id_proyecto_ley', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}