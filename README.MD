# Anekdotes Form Wrapper 

[![Latest Stable Version](https://poser.pugx.org/anekdotes/formwrapper/v/stable)](https://packagist.org/packages/anekdotes/formwrapper)
[![Build Status](https://travis-ci.org/anekdotes/formwrapper.svg?branch=master)](https://travis-ci.org/anekdotes/formwrapper)
[![codecov.io](https://codecov.io/github/anekdotes/formwrapper/coverage.svg)](https://codecov.io/github/anekdotes/formwrapper?branch=master)
[![StyleCI](https://styleci.io/repos/63632796/shield?style=flat)](https://styleci.io/repos/63632796)
[![License](https://poser.pugx.org/anekdotes/formwrapper/license)](https://packagist.org/packages/anekdotes/formwrapper)
[![Total Downloads](https://poser.pugx.org/anekdotes/formwrapper/downloads)](https://packagist.org/packages/anekdotes/formwrapper)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/be31cd80841d4af386c4b32df57597ce)](https://www.codacy.com/app/Grasseh/formwrapper?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=anekdotes/formwrapper&amp;utm_campaign=Badge_Grade)

Allows instantiation of standardized custom form wrappers. Eases extandability of new wrappers. 

## Installation

Install via composer into your project:

    composer require anekdotes/formwrapper
    
## Basic Usage

```
<?php
    $form = new Anekdotes\FormWrapper\Form;
    echo($form->open('www.toaster.com', post, ["class" => "form"]));
    echo($form->Text('label', 'toaster', ["class" => "form-stuff"], 'val'));
    echo($form->close());
?>
```

will output
```
    <form action="www.toaster.com" method="form" class="form">
    <input type="text" name="toaster" value="val class="form-stuff" />
    </form>
```    

All built-in Controls and Wrappers can be found in the folder ```examples```

## Extending Controls and Wrappers

It is possible to write your own controls and wrappers and use them.

```
    namespace MyCustomWrapper;

    use Anekdotes\FormWrapper\Wrappers\Wrapper;

    class MyWrapper extends Wrapper
    {
        public function handle($input, $title = '')
        {
            return '<div class="MyCustomLabel">'.$title.'</div><div>'.$input.'</div>';
        }
    }
```

```
    namespace MyCustomControl;

    use Anekdotes\FormWrapper\Controls\Control;

    class MyControl extends Control
    {
        protected $nbParams = 1;

        public function prepare($arguments)
        {
            $name = $arguments[0];
            return '<input type="text" value="'.$name.'" name="'.$name.'"/>';
        }
    }
```

```

    $form = new Anekdotes\FormWrapper\Form;
    $form->wrappersNamespace = 'MyCustomWrapper//';
    $form->controlsNamespace = 'MyCustomControl//';
    echo($form->open('www.toaster.com', post, ["class" => "form"]));
    echo($form->MyControl('toaster', 'toaster', 'MyWrapper'));
    echo($form->close());

```
## Contributing

Pull requests are welcome. Note that if you want to develop the scss files, you will need to install npm dependencies using `npm install`. You will then need to use `gulp` to compile the CSS.

Pull requests must have tests included (excepted for the scss). If no tests are to be found, if the pull request does not pass the current test suite or if the tests do not cover enough cases, the pull requests may not be merged. 

## Note

Most of the wrappers use classes from Bootstrap.
