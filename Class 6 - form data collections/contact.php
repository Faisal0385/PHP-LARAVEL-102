<?php

if(isset($_POST['submit'])){
    // echo $_POST['fname'] . '<br>';
    // echo $_POST['email']. '<br>';
    // echo $_POST['message']. '<br>';

    $fname   = $_POST['fname'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $error_arr = [];

    if($fname == ""){ 
        array_push($error_arr,"Name Field can not be empty!!");
    };
    if($email == ""){
        array_push($error_arr,"Email Field can not be empty!!");
    }
    if($message == ""){
        array_push($error_arr,"Message Field can not be empty!!");
    }
}


?>

<?php
include './components/header/header.php';
?>


<div class="container">
    <h4 class="text-center p-4">Contact us</h4>
    <div class="row">
        <div class="col-lg-6">
            <p style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus earum eligendi, doloribus, dolores iste alias ratione officiis neque autem perferendis exercitationem quas nisi aliquid ducimus odio in voluptatum dignissimos incidunt ad, voluptatibus eius et ipsam distinctio? Autem quisquam nulla vel quasi rerum, molestias aliquid laudantium architecto libero dolorem, nihil delectus dignissimos voluptas sint reiciendis expedita minus quod quo numquam maiores ipsum. Aliquid maiores facere omnis distinctio voluptatum sapiente, cupiditate adipisci laboriosam et consequuntur fuga dolores nostrum assumenda quaerat ex iste facilis neque dicta eaque? Accusamus culpa delectus assumenda dicta eveniet libero facilis accusantium nulla similique nihil quos voluptatem minima quia, mollitia odio earum recusandae blanditiis? Quisquam dicta temporibus inventore animi nisi! Unde quas facere saepe numquam dolor, eos, odit repudiandae dolores ut sint minima. Dolorum reiciendis optio non enim vitae doloremque commodi odio, nisi, architecto, amet totam sit adipisci! Reiciendis aliquam harum laboriosam maiores dolore sit facilis sint mollitia dolor vitae id autem ullam reprehenderit itaque earum blanditiis veniam dolorum iste possimus debitis aliquid eligendi quidem, in eveniet. Expedita quasi eius exercitationem, eaque quia, fugit voluptatem eos vero asperiores dolores natus omnis, ipsam ex ullam ut reprehenderit facere et quam amet. Incidunt molestias ipsa minus iusto provident ipsum in blanditiis!
            </p>
        </div>

        <div class="col-lg-6">
            <h3>Welcome <?php   ?></h3>
            <ul>
                <?php
                if(isset($_POST['submit'])){
                    foreach($error_arr as $err){
                        echo '<li class="text-danger">'.$err.'</li>';
                    };
                }
                ?>
            </ul>
            

            <form method="POST" action="#">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="mb-3">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea name="message" class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Message</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include './components/footer/footer.php';
?>