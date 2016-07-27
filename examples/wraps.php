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
            <h1> Above </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Above');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Above');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Above');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Above');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Above');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Above');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> RowExtended </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'RowExtended');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'RowExtended');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'RowExtended');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'RowExtended');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'RowExtended');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'RowExtended');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> SingleEight </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleEight');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> SingleFour </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleFour');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleFour');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleFour');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleFour');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleFour');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleFour');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> SingleSix </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'SingleSix');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> None </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'None');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'None');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'None');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'None');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'None');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'None');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> Small </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Small');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Small');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Small');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Small');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Small');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Small');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> Two </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Two');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Two');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Two');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Two');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Two');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Two');
            ?>
        </div>
        <div class="col-lg-4">
            <h1> Wrap </h1>
            <?php
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Wrap');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Wrap');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Wrap');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Wrap');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Wrap');
                echo $form->Text('Name', 'name', ['class' => 'form-control'], 'Form Wrapper', 'Wrap');
            ?>
        </div>
        <?php
            echo $form->close();
        ?>
        </div>
    <div>
</body>
