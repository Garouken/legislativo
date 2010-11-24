<?php

/**
 * BaseAutorProyectoLey
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_autor
 * @property integer $id_proyecto_ley
 * @property ProyectoLey $ProyectoLey
 * @property Autor $Autor
 * 
 * @method integer          getIdAutor()         Returns the current record's "id_autor" value
 * @method integer          getIdProyectoLey()   Returns the current record's "id_proyecto_ley" value
 * @method ProyectoLey      getProyectoLey()     Returns the current record's "ProyectoLey" value
 * @method Autor            getAutor()           Returns the current record's "Autor" value
 * @method AutorProyectoLey setIdAutor()         Sets the current record's "id_autor" value
 * @method AutorProyectoLey setIdProyectoLey()   Sets the current record's "id_proyecto_ley" value
 * @method AutorProyectoLey setProyectoLey()     Sets the current record's "ProyectoLey" value
 * @method AutorProyectoLey setAutor()           Sets the current record's "Autor" value
 * 
 * @package    vota
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7021 2010-01-12 20:39:49Z lsmith $
 */
abstract class BaseAutorProyectoLey extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('AutorProyectoLey');
        $this->hasColumn('id_autor', 'integer', null, array(
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
        $this->hasOne('ProyectoLey', array(
             'local' => 'id_proyecto_ley',
             'foreign' => 'id_proyecto_ley'));

        $this->hasOne('Autor', array(
             'local' => 'id_autor',
             'foreign' => 'id_autor'));
    }
}