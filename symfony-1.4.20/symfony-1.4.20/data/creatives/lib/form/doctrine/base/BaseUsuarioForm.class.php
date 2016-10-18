<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    creatives
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'usuario_codigo'   => new sfWidgetFormInputText(),
      'usuario_nombre'   => new sfWidgetFormInputText(),
      'usuario_apellido' => new sfWidgetFormInputText(),
      'foto'             => new sfWidgetFormInputText(),
      'fechanacimiento'  => new sfWidgetFormDate(),
      'genero'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario_codigo'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'usuario_nombre'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'usuario_apellido' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'foto'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fechanacimiento'  => new sfValidatorDate(array('required' => false)),
      'genero'           => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
