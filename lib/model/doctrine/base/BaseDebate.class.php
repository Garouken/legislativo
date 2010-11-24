<?php

/**
 * BaseDebate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_debate
 * @property integer $id_proyecto_ley
 * @property integer $comision_sala
 * @property integer $comisiones_unidas
 * @property string $camara
 * @property date $fecha
 * @property time $hora
 * @property integer $discusion
 * @property string $tema
 * @property string $debate
 * @property string $tags
 * @property string $docs
 * @property ProyectoLey $ProyectoLey
 * @property Doctrine_Collection $Votacion
 * @property Doctrine_Collection $Comision
 * @property Doctrine_Collection $VotacionComision
 * 
 * @method integer             getIdDebate()          Returns the current record's "id_debate" value
 * @method integer             getIdProyectoLey()     Returns the current record's "id_proyecto_ley" value
 * @method integer             getComisionSala()      Returns the current record's "comision_sala" value
 * @method integer             getComisionesUnidas()  Returns the current record's "comisiones_unidas" value
 * @method string              getCamara()            Returns the current record's "camara" value
 * @method date                getFecha()             Returns the current record's "fecha" value
 * @method time                getHora()              Returns the current record's "hora" value
 * @method integer             getDiscusion()         Returns the current record's "discusion" value
 * @method string              getTema()              Returns the current record's "tema" value
 * @method string              getDebate()            Returns the current record's "debate" value
 * @method string              getTags()              Returns the current record's "tags" value
 * @method string              getDocs()              Returns the current record's "docs" value
 * @method ProyectoLey         getProyectoLey()       Returns the current record's "ProyectoLey" value
 * @method Doctrine_Collection getVotacion()          Returns the current record's "Votacion" collection
 * @method Doctrine_Collection getComision()          Returns the current record's "Comision" collection
 * @method Doctrine_Collection getVotacionComision()  Returns the current record's "VotacionComision" collection
 * @method Debate              setIdDebate()          Sets the current record's "id_debate" value
 * @method Debate              setIdProyectoLey()     Sets the current record's "id_proyecto_ley" value
 * @method Debate              setComisionSala()      Sets the current record's "comision_sala" value
 * @method Debate              setComisionesUnidas()  Sets the current record's "comisiones_unidas" value
 * @method Debate              setCamara()            Sets the current record's "camara" value
 * @method Debate              setFecha()             Sets the current record's "fecha" value
 * @method Debate              setHora()              Sets the current record's "hora" value
 * @method Debate              setDiscusion()         Sets the current record's "discusion" value
 * @method Debate              setTema()              Sets the current record's "tema" value
 * @method Debate              setDebate()            Sets the current record's "debate" value
 * @method Debate              setTags()              Sets the current record's "tags" value
 * @method Debate              setDocs()              Sets the current record's "docs" value
 * @method Debate              setProyectoLey()       Sets the current record's "ProyectoLey" value
 * @method Debate              setVotacion()          Sets the current record's "Votacion" collection
 * @method Debate              setComision()          Sets the current record's "Comision" collection
 * @method Debate              setVotacionComision()  Sets the current record's "VotacionComision" collection
 * 
 * @package    vota
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7021 2010-01-12 20:39:49Z lsmith $
 */
abstract class BaseDebate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('Debate');
        $this->hasColumn('id_debate', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('id_proyecto_ley', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('comision_sala', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('comisiones_unidas', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('camara', 'string', 30, array(
             'type' => 'string',
             'length' => '30',
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('hora', 'time', null, array(
             'type' => 'time',
             'notnull' => true,
             ));
        $this->hasColumn('discusion', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('tema', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('debate', 'string', 5000, array(
             'type' => 'string',
             'length' => '5000',
             ));
        $this->hasColumn('tags', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('docs', 'string', 5000, array(
             'type' => 'string',
             'length' => '5000',
             ));
        $this->hasColumn('destacado_titulo', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('destacado_texto', 'string', 1000, array(
             'type' => 'string',
             'length' => '1000',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ProyectoLey', array(
             'local' => 'id_proyecto_ley',
             'foreign' => 'id_proyecto_ley'));

        $this->hasMany('Votacion', array(
             'local' => 'id_debate',
             'foreign' => 'id_debate'));

        $this->hasMany('Comision', array(
             'refClass' => 'DebateComision',
             'local' => 'id_debate',
             'foreign' => 'id_comision',
             'onDelete' => 'CASCADE'));

        $this->hasMany('VotacionComision', array(
             'local' => 'id_debate',
             'foreign' => 'id_debate'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}