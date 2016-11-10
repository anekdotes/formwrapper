<html>
<head>
    <link rel="stylesheet" href="/../src/anekdotes/assets/min/Form.css">
</head>
<body>
    <div class="row">
        <div class="col-lg-6">
            <h1> Customs </h1>
        <?php
            require __DIR__.'/../vendor/autoload.php';
            // Please note that the Custom Wrapper and Control are defined in the examples/CustomNamespace folder
            $form = new \Anekdotes\FormWrapper\Form();
            $form->wrappersNamespace = "CustomNamespace\\";
            $form->controlsNamespace = "CustomNamespace\\";
            echo $form->open('http://www.github.com', 'post', ['class' => 'form']);
            echo $form->SuperControl('This label appears twice OMG', 'Text to appear in the input OMG', ['class' => 'form-control'], 'SuperWrap');
            echo $form->close();
        ?>
        </div>
    <div>
</body>
