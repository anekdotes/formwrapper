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
    echo($form->Text('label', 'toaster', ["class" => "form-stuff"], 'val'));
?>
```

will output
```
    <input type="text" name="toaster" value="val class="form-stuff" />
```    

## Note

Most of the wrappers use classes from Bootstrap.
