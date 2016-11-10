<?php

namespace CustomNamespace;

use Anekdotes\FormWrapper\Wrappers\Wrapper;

class SuperWrap extends Wrapper
{
  public function handle($input, $title = ''){
    return '<div class="col-lg-2">'.$title.'</div><div class="col-lg-2">'.$title.'</div><div class="col-lg-8">'.$input.'</div>';
  }
}
