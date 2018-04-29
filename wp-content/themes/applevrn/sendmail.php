<?php
/**
 * Template Name: order
 */
get_header(); ?>

<?php
$name = strip_tags(trim($_POST['data_name']));
$phone = strip_tags(trim($_POST['data_phone']));
$link = strip_tags(trim($_POST['page']));

$subject = '[Новая заявка]';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";


$msg = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка</h2>\r\n";
if (!empty($name)) {
    $msg .= "<p><strong>Имя:</strong> " . $name . "</p>\r\n";
}

if (!empty($phone)) {
    $msg .= "<p><strong>Телефон:</strong> " . $phone . "</p>\r\n";
}

$msg .= "<p><strong>Источник:</strong> " . $link . "</p>\r\n";
$msg .= "</body></html>";

if (!empty($phone)) {
//     отправка сообщения
    if (mail('malanchukdima@mail.ru', $subject, $msg, $headers)) { ?>
        <div class="b-default">
            <h1 umi:element-id="4" umi:field-name="h1"><?php the_title(); ?></h1>
            <div class="b-content" umi:element-id="4" umi:field-name="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>

        </div>
        </div><?php
    } else { ?>
        <div class="b-default">
            <h1 umi:element-id="4" umi:field-name="h1"><?php the_title(); ?></h1>
            <div class="b-content" umi:element-id="4" umi:field-name="content">
                <?php echo 'При отправке формы произошла ошибка. Возможно вы не заполнили все необходимые поля. Пожалуйста, попробуйте еще раз. ' . $link; ?>
            </div>
        </div>

        </div>
        </div><?php
    }
} else { ?>
    <div class="b-default">
        <h1 umi:element-id="4" umi:field-name="h1"><?php the_title(); ?></h1>
        <div class="b-content" umi:element-id="4" umi:field-name="content">
            <?php echo 'При отправке формы произошла ошибка. Возможно вы не заполнили все необходимые поля. Пожалуйста, попробуйте еще раз. ' . $link; ?>
        </div>
    </div>

    </div>
    </div><?php
}
?>
<?php get_footer(); ?>
