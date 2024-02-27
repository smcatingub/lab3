<!DOCTYPE html>
<html Lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? "shane's" ?></title>
    <link rel="icon" type="image/x-icon" href="./images/icons/favicon.png">
    <link href="./css/common.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/contact_form-style.css">
</head>

<?= $this->include('partials/navbar') ?>

<div id="outer-success-plz">
    <div id="success-container">
        <img src="./images/icons/success.gif">
        <p>Feedback posted.</p>
    </div>
</div>

<div id="ewanhuhu">
    <a id="contact-view" class="contact-text-buttons" href="./guest">view feedbacks</a>
</div>