<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

use FacturaScripts\Core\Base\NumberTools;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of WidgetNumber
 *
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class WidgetNumber extends BaseWidget
{

    /**
     * @var int
     */
    public $decimal;

    /**
     * Indicates the max value
     *
     * @var string
     */
    public $max;

    /**
     * Indicates the min value
     *
     * @var string
     */
    public $min;

    /**
     * Indicates the step value
     *
     * @var string
     */
    public $step;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        parent::__construct($data);
        $this->decimal = (int)($data['decimal'] ?? FS_NF0);
        $this->max = $data['max'] ?? '';
        $this->min = $data['min'] ?? '';
        $this->step = $data['step'] ?? 'any';
    }

    public function gridFormat(): array
    {
        $format = '0.' . str_repeat('0', $this->decimal);
        return ['pattern' => $format];
    }

    /**
     * @param object $model
     * @param Request $request
     */
    public function processFormData(&$model, $request)
    {
        $model->{$this->fieldname} = (float)$request->request->get($this->fieldname);
    }

    /**
     * @param string $type
     * @param string $extraClass
     *
     * @return string
     */
    protected function inputHtml($type = 'number', $extraClass = '')
    {
        return parent::inputHtml($type, $extraClass);
    }

    /**
     * Add extra attributes to html input field
     *
     * @return string
     */
    protected function inputHtmlExtraParams()
    {
        $step = ' step="' . $this->step . '"';
        $min = $this->min !== '' ? ' min="' . $this->min . '"' : '';
        $max = $this->max !== '' ? ' max="' . $this->max . '"' : '';
        return $min . $max . $step . parent::inputHtmlExtraParams();
    }

    /**
     * @param object $model
     */
    protected function setValue($model)
    {
        parent::setValue($model);
        if (null === $this->value && $this->required) {
            $this->value = empty($this->min) ? 0 : (float)$this->min;
        }
    }

    /**
     * @return string
     */
    protected function show()
    {
        return is_null($this->value) ? '-' : NumberTools::format($this->value, $this->decimal);
    }

    /**
     * @param string $initialClass
     * @param string $alternativeClass
     */
    protected function tableCellClass($initialClass = '', $alternativeClass = '')
    {
        $initialClass .= ' text-nowrap';
        return parent::tableCellClass($initialClass, $alternativeClass);
    }
}
