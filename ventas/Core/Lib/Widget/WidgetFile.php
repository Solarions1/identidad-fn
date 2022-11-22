<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

use FacturaScripts\Core\Base\MiniLog;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of WidgetFile
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class WidgetFile extends BaseWidget
{

    /**
     * @var string
     */
    public $accept;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        parent::__construct($data);
        $this->accept = $data['accept'] ?? '';
    }

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

        $additionalDesc = static::$i18n->trans('help-server-accepts-filesize', ['%size%' => $this->getMaxFileUpload()]);
        $finalDesc = empty($description) ? $additionalDesc : static::$i18n->trans($description) . ' ' . $additionalDesc;

        if ($this->readonly()) {
            $class = $this->combineClasses($this->css('form-control'), $this->class);
            return '<div class="form-group mb-2">'
                . '<label class="mb-0">' . $this->onclickHtml(static::$i18n->trans($title), $titleurl) . '</label>'
                . '<input type="hidden" name="' . $this->fieldname . '" value="' . $this->value . '"/>'
                . '<input type="text" value="' . $this->show() . '" class="' . $class . '" readonly=""/>'
                . '</div>';
        }

        return parent::edit($model, $title, $finalDesc, $titleurl);
    }

    /**
     * @param object $model
     * @param Request $request
     */
    public function processFormData(&$model, $request)
    {
        $logger = new MiniLog();

        // get file uploads
        foreach ($request->files->all() as $key => $uploadFile) {
            if ($key != $this->fieldname || is_null($uploadFile)) {
                continue;
            } elseif (false === $uploadFile->isValid()) {
                $logger->error($uploadFile->getErrorMessage());
                continue;
            }

            // exclude php files
            if (in_array($uploadFile->getClientMimeType(), ['application/x-php', 'text/x-php'])) {
                $logger->error($this->i18n->trans('php-files-blocked'));
                continue;
            }

            // check if the file already exists
            $destiny = FS_FOLDER . '/MyFiles/';
            $destinyName = $uploadFile->getClientOriginalName();
            if (file_exists($destiny . $destinyName)) {
                $destinyName = mt_rand(1, 999999) . '_' . $destinyName;
            }

            // move the file to the MyFiles folder
            if ($uploadFile->move($destiny, $destinyName)) {
                $model->{$this->fieldname} = $destinyName;
                break;
            }

            $logger->error('file-not-found');
        }
    }

    /**
     * Return the max file size that can be uploaded.
     *
     * @return int
     */
    protected function getMaxFileUpload()
    {
        return UploadedFile::getMaxFilesize() / 1024 / 1024;
    }

    /**
     * @param string $type
     * @param string $extraClass
     *
     * @return string
     */
    protected function inputHtml($type = 'file', $extraClass = '')
    {
        $class = empty($extraClass) ? $this->css('form-control-file') : $this->css('form-control-file') . ' ' . $extraClass;
        return '<input type="' . $type . '" name="' . $this->fieldname . '" value="' . $this->value
            . '" class="' . $class . '"' . $this->inputHtmlExtraParams() . '/>';
    }

    /**
     * @return string
     */
    protected function inputHtmlExtraParams()
    {
        $html = parent::inputHtmlExtraParams();
        if (!empty($this->accept)) {
            $html .= ' accept="' . $this->accept . '"';
        }

        return $html;
    }
}
