<?php
$this->layout = false;
?>

<!DOCTYPE html>
<html lang="en-US" >
    <head>

        <title>Samples of Website</title>
        <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/style-web.css">
        <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/web-sample.css">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
        <link href='https://w3layouts.com/wp-content/themes/w3layouts/fonts/icons.css' rel='stylesheet' type='text/css'>



        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>

    </head>

    <body>

        <div class="header">

        </div>


        <div class="main" id="home">
            <div class="wrap">
                <div class="title title-template">
                    <h1>Samples of Website</h1>
                </div>
                <div class="content ">

                    <div>
                        <div class="section group">

                            <?php
                            foreach ($arrTemplates as $rowTemplate) {
                                ?>
                                <div class="row-template">
                                    <?php
                                    foreach ($rowTemplate as $template) {
                                        ?>
                                        <div class="grid_1_of_4 images_1_of_4" data-id="<?php echo $template['id']; ?>">
                                            <a target="_blank" href="<?php echo $this->Url->build(["controller" => "webSamples","action"=>$template['action']]); ?>">
                                                <img
                                                    src="<?php echo $this->request->webroot . 'img/web-samples/' . $template['image']; ?>"
                                                    title="<?php echo $template['title']; ?>"
                                                    alt="<?php echo $template['alt']; ?>"/>
                                                <h2><?php echo $template['name']; ?></h2>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                    <?php
                                }
                                ?>



                            <div class="clear"></div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>

        <div class="footer-sample">
            <div class="content-footer">
                copyright
            </div>
        </div>

    </script>
</body>
</html>