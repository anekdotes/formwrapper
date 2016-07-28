<html>
<head>
    <link rel="stylesheet" href="/../src/anekdotes/assets/min/Form.css">
</head>
<body>
    <div class="row">
        <div class="col-lg-6">
            <h1> Controls </h1>
        <?php
            require __DIR__.'/../vendor/autoload.php';
            $form = new \Anekdotes\FormWrapper\Form();
            echo $form->open('http://www.github.com', 'post', ['class' => 'form']);
            echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Wrap');
            echo $form->Blank('Age', ['class' => 'form-control'], '21', 'Wrap');
            echo $form->File('File', 'File', ['class' => 'form-control'], 'Wrap');
            echo $form->Hidden(':O', 'formHidden', ['class' => 'form-control'], 'toast');
            echo $form->Hidden('Secret', 'careful', ['class' => 'form-control'], 'toast', 'Wrap');
            echo $form->Number('# of toasters owned', 'toasters', ['class' => 'form-control'], '4', 'Wrap');
            echo $form->Password('Not a secret?', 'secret', ['class' => 'form-control'], 'toast', 'Wrap');
            echo $form->Textarea('Others?', 'others', ['class' => 'form-control'], 'Filler', 'Wrap');
            echo $form->Checkbox('Active', 'active', '1', ['class' => 'form-stuff'], true, 'Wrap');
            $Objects = [
                ['id' => 1, 'name' => 'Ketchup'],
                ['id' => 3, 'name' => 'Mustard'],
                ['id' => 7, 'name' => 'Jelly'],
            ];
            echo $form->CheckboxGroup('Options', 'options', $Objects, ['class' => 'form-stuff'], [1, 7], 'Wrap');
            echo $form->Radio('FM', 'fm', '1', ['class' => 'form-stuff'], false, 'Wrap');
            echo $form->RadioGroup('Best condiment', 'condiment', $Objects, ['class' => 'form-stuff'], [1], 'Wrap');
            echo $form->Select('Select a condiment', 'selCond', $Objects, ['class' => 'form-control'], [2], '', 'Wrap');
            echo $form->Select('Select a placeholder', 'selCond', $Objects, ['class' => 'form-control'], '', 'Placeholder', 'Wrap');
            echo $form->Label('', 'Label', ['class' => 'form-label'], 'Wrap');
            echo $form->YesNo('Do you?', 'yesno1', ['class' => 'form-label'], true, 'Wrap');
            echo $form->YesNo('Faites-vous?', 'yesno2', ['class' => 'form-label', 'yes' => 'si', 'no' => 'nicht'], false, 'Wrap');
            echo $form->LegendText('You are', 'legend', ['class' => 'form-control'], 'legend', 'a', 'Wrap');
            echo $form->LegendText('You are', 'legend', ['class' => 'form-control', 'position' => 'right'], 'a', 'legend', 'Wrap');
            echo $form->Money('Price', 'price', ['class' => 'form-control'], '12.00', 'Wrap');

            echo $form->Submit('Go To Github', 'Click Here', ['class' => 'btn'], 'Wrap');
            echo $form->close();
        ?>
        </div>
    <div>
</body>
