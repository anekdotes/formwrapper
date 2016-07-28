<html>
<head>
    <link rel="stylesheet" href="/../src/anekdotes/assets/min/Form.css">
</head>
<body>
    <div class="row">
        <?php
            require __DIR__.'/../vendor/autoload.php';
            $form = new \Anekdotes\FormWrapper\Form();
            echo $form->open('http://www.github.com', 'post', ['class' => 'form']);
        ?>
        <div class="col-lg-4">
            <h1> Manipulating Singles 4 + 8 </h1>
            <?php
                echo $form->Label('', 'Label', ['class' => 'form-label'], 'SingleFour');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
                echo $form->Label('', 'Label', ['class' => 'form-label'], 'SingleFour');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
                echo $form->Label('', 'Label', ['class' => 'form-label'], 'SingleFour');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> Manipulating Singles 6 + 6 </h1>
            <?php
                echo $form->Label('', 'Label', ['class' => 'form-label'], 'SingleSix');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
                echo $form->Label('', 'Label', ['class' => 'form-label'], 'SingleSix');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
                echo $form->Label('', 'Label', ['class' => 'form-label'], 'SingleSix');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
            ?>
        </div>
        <?php
            echo $form->close();
        ?>
        </div>
    <div>
</body>
