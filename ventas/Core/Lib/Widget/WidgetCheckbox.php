<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

use Symfony\Component\HttpFoundation\Request;

/**
 * Description of WidgetCheckbox
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class WidgetCheckbox extends BaseWidget
{

    /**
     * @param object $model
     * @param string $title
     * @param string $description
     * @param string $titleurl
     *
     * @return string
     */
    public function edit($model, $title = '', $description = '', $titleurl = '')
    {
        $this->setValue($model);
        $checked = $this->value ? ' checked=""' : '';
        $id = 'checkbox' . $this->getUniqueId();
        $class = $this->combineClasses($this->css('form-check-input'), $this->class);
        $readonly = $this->readonly() ? ' onclick="return false;"' : '';
        $tabindex = $this->tabindex ? ' tabindex="' . $this->tabindex . '"' : '';

        $inputHtml = '<input type="checkbox" name="' . $this->fieldname . '" value="TRUE" id="' . $id
            . '" class="' . $class . '"' . $checked . $readonly . $tabindex . '/>';
        $labelHtml = '<label for="' . $id . '">' . static::$i18n->trans($title) . '</label>';
        $descriptionHtml = empty($description) ? '' :
            '<small class="form-text text-muted">' . static::$i18n->trans($description) . '</small>';

        return '<div class="form-group form-check pr-3 mb-2">'
            . $inputHtml
            . $labelHtml
            . $descriptionHtml
            . '</div>';
    }

    /**
     * @param object $model
     * @param Request $request
     */
    public function processFormData(&$model, $request)
    {
        $value = $request->request->get($this->fieldname);
        $model->{$this->fieldname} = null !== $value;
    }

    /**
     * @param object $model
     *
     * @return string
     */
    public function inputHidden($model)
    {
        $this->setValue($model);
        return $this->value ? '<input type="hidden" name="' . $this->fieldname . '" value="TRUE"/>' : '';
    }

    /**
     * @param object $model
     */
    protected function setValue($model)
    {
        parent::setValue($model);
        if ($this->value === 'true') {
            $this->value = true;
        } else {
            $this->value = (bool)$this->value;
        }
    }

    /**
     * @return string
     */
    protected function show()
    {
        if (null === $this->value) {
            return '-';
        }

        return $this->value ? static::$i18n->trans('yes') : static::$i18n->trans('no');
    }

    /**
     * @param string $initialClass
     * @param string $alternativeClass
     *
     * @return string
     */
    protected function tableCellClass($initialClass = '', $alternativeClass = '')
    {
        if (false === $this->value) {
            $alternativeClass = $this->colorToClass('danger', 'text-');
        } elseif (true === $this->value) {
            $alternativeClass = $this->colorToClass('success', 'text-');
        }

        return parent::tableCellClass($initialClass, $alternativeClass);
    }
}
