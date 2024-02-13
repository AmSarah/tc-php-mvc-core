<?php 

namespace thecodeholicsarah\phpmvc\form;
use thecodeholicsarah\phpmvc\form\BaseField;
use thecodeholicsarah\phpmvc\Model;


class TextareaField extends BaseField
{   

    public function renderInput(): string {
        return sprintf('<textarea name="%s" class="form-control%s">%s</textarea>',
        $this->attribute,
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->model->{$this->attribute},
       );
        
    }


}
