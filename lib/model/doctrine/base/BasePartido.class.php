<?php

/**
 * BasePartido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_partido
 * @property string $nombre
 * @property string $sigla
 * @property string $fecha_nacimiento
 * @property string $mesa_adulta
 * @property string $mesa_juventud
 * @property integer $nro_diputados_2010
 * @property integer $nro_senadores_2010
 * @property string $direccion
 * @property string $telefono
 * @property string $mail
 * @property string $web
 * @property string $historia
 * @property string $principios
 * @property Doctrine_Collection $Parlamentario
 * 
 * @method integer             getIdPartido()          Returns the current record's "id_partido" value
 * @method string              getNombre()             Returns the current record's "nombre" value
 * @method string              getSigla()              Returns the current record's "sigla" value
 * @method string              getFechaNacimiento()    Returns the current record's "fecha_nacimiento" value
 * @method string              getMesaAdulta()         Returns the current record's "mesa_adulta" value
 * @method string              getMesaJuventud()       Returns the current record's "mesa_juventud" value
 * @method integer             getNroDiputados2010()   Returns the current record's "nro_diputados_2010" value
 * @method integer             getNroSenadores2010()   Returns the current record's "nro_senadores_2010" value
 * @method string              getDireccion()          Returns the current record's "direccion" value
 * @method string              getTelefono()           Returns the current record's "telefono" value
 * @method string              getMail()               Returns the current record's "mail" value
 * @method string              getWeb()                Returns the current record's "web" value
 * @method string              getHistoria()           Returns the current record's "historia" value
 * @method string              getPrincipios()         Returns the current record's "principios" value
 * @method Doctrine_Collection getParlamentario()      Returns the current record's "Parlamentario" collection
 * @method Partido             setIdPartido()          Sets the current record's "id_partido" value
 * @method Partido             setNombre()             Sets the current record's "nombre" value
 * @method Partido             setSigla()              Sets the current record's "sigla" value
 * @method Partido             setFechaNacimiento()    Sets the current record's "fecha_nacimiento" value
 * @method Partido             setMesaAdulta()         Sets the current record's "mesa_adulta" value
 * @method Partido             setMesaJuventud()       Sets the current record's "mesa_juventud" value
 * @method Partido             setNroDiputados2010()   Sets the current record's "nro_diputados_2010" value
 * @method Partido             setNroSenadores2010()   Sets the current record's "nro_senadores_2010" value
 * @method Partido             setDireccion()          Sets the current record's "direccion" value
 * @method Partido             setTelefono()           Sets the current record's "telefono" value
 * @method Partido             setMail()               Sets the current record's "mail" value
 * @method Partido             setWeb()                Sets the current record's "web" value
 * @method Partido             setHistoria()           Sets the current record's "historia" value
 * @method Partido             setPrincipios()         Sets the current record's "principios" value
 * @method Partido             setParlamentario()      Sets the current record's "Parlamentario" collection
 * 
 * @package    vota
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7021 2010-01-12 20:39:49Z lsmith $
 */
abstract class BasePartido extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('Partido');
        $this->hasColumn('id_partido', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('sigla', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '10',
             ));
        $this->hasColumn('fecha_nacimiento', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('mesa_adulta', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
        $this->hasColumn('mesa_juventud', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
        $this->hasColumn('nro_diputados_2010', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nro_senadores_2010', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('direccion', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('telefono', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
        $this->hasColumn('mail', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('web', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('historia', 'string', 5000, array(
             'type' => 'string',
             'length' => '5000',
             ));
        $this->hasColumn('principios', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Parlamentario', array(
             'local' => 'id_partido',
             'foreign' => 'id_partido'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}