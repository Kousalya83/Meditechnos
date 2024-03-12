<style type="text/css">
    .banner {
        background-image: url("<?php echo base_url('assets/img/contact/result_bg.png'); ?>");
        background-size: cover;
        width: 100%;
        height: 100vh;
        min-height: 100vh;
        padding: 10% 5% 5%;
    }

    .banner h3{
        font-family: Excon-Bold;
    }

    .banner h5{
        font-family: Excon-Regular;
    }

    .content{
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 6px 6px 12px #00000029;
        border-radius: 18px;
        opacity: 1;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (max-width:992px) {
        .banner{
            height: 75vh;
            min-height: 75vh;
            padding: 25% 5% 5%;
        }
    }
</style>

<div class="row">
    <section class="banner">
        <div class="content">
            <div class="message text-center">
                <img src="<?php echo base_url('assets/img/contact/success.png'); ?>" alt="Success" width="50%">
                <h3>Submission Successfully.</h3>
                <h5>We will get back to you shortly.</h5>
            </div>
        </div>
    </section>
</div>