<?php

/**
 * Usuario filter form base class.
 *
 * @package    creatives
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_codigo'   => new sfWidgetFormFilterInput(),
      'usuario_nombre'   => new sfWidgetFormFilterInput(),
      'usuario_apellido' => new sfWidgetFormFilterInput(),
      'foto'             => new sfWidgetFormFilterInput(),
      'fechanacimiento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'genero'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'usuario_codigo'   => new sfValidatorPass(array('required' => false)),
      'usuario_nombre'   => new sfValidatorPass(array('required' => false)),
      'usuario_apellido' => new sfValidatorPass(array('required' => false)),
      'foto'             => new sfValidatorPass(array('required' => false)),
      'fechanacimiento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'usuario_codigo'   => 'Text',
      'usuario_nombre'   => 'Text',
      'usuario_apellido' => 'Text',
      'foto'             => 'Text',
      'fechanacimiento'  => 'Date',
      'genero'           => 'Number',
    );
  }
}
