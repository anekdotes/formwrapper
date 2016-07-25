<html>
<head>
    <link rel="stylesheet" href="/../src/anekdotes/assets/min/Form.css">
</head>
<body>
    <h1> Basic Test </h1>
<?php
    require __DIR__.'/../vendor/autoload.php';
    $form = new \Anekdotes\FormWrapper\Form();
    echo $form->open('http://www.github.com', 'post', ['class' => 'form']);
    echo $form->Text('Name', 'name', ['class' => 'form-stuff'], 'Form Wrapper', 'Wrap');
    echo $form->Submit('Go To Github', 'Click Here', ['class' => 'btn'], 'Wrap');
    echo $form->close();
?>
</body>
