<html>
<head>
    <link rel="stylesheet" href="/../src/anekdotes/assets/min/Form.css">
</head>
<body>
    <h1> Controls </h1>
<?php
    require __DIR__.'/../vendor/autoload.php';
    $form = new \Anekdotes\FormWrapper\Form();
    echo $form->open('http://www.github.com', 'post', ['class' => 'form']);
    echo $form->Text('Name', 'name', ['class' => 'form-stuff'], 'Form Wrapper', 'Wrap');
    echo $form->Blank('Age', ['class' => 'form-stuff'], '21', 'Wrap');
    echo $form->File('File', 'File', ['class' => 'form-stuff'], 'Wrap');
    echo $form->Hidden(':O', 'formHidden', ['class' => 'form-stuff'], 'toast');
    echo $form->Hidden('Secret', 'careful', ['class' => 'form-stuff'], 'toast', 'Wrap');
    echo $form->Number('# of toasters owned', 'toasters', ['class' => 'form-stuff'], '4', 'Wrap');
    echo $form->Password('Not a secret?', 'secret', ['class' => 'form-stuff'], 'toast', 'Wrap');
    echo $form->Textarea('Others?', 'others', ['class' => 'form-stuff'], 'Filler', 'Wrap');
    echo $form->Checkbox('Active', 'active', '1', ['class' => 'form-stuff'], 'true', 'Wrap');
    $Objects = [
        ['id' => 1, 'name' => 'Ketchup'],  
        ['id' => 3, 'name' => 'Mustard'],  
        ['id' => 7, 'name' => 'Jelly'],  
    ];
    echo $form->CheckboxGroup('Options', 'options', $Objects, ['class' => 'form-stuff'], [1,7], 'Wrap');



    echo $form->Submit('Go To Github', 'Click Here', ['class' => 'btn'], 'Wrap');
    echo $form->close();
?>
</body>
