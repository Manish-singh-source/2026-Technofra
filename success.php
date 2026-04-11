<?php include 'header.php'; ?>
<head>
    <style>
      .success-page {
    position: relative;
    /* overflow: hidden; */
    padding: 170px 0 90px;
    background: radial-gradient(circle at top left, rgb(55 198 244), transparent 35%), radial-gradient(circle at bottom right, rgba(20, 33, 61, 0.18), transparent 30%), linear-gradient(135deg, #002769 0%, #eef6ff 100%);
}
        .success-page::before,
        .success-page::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            z-index: 0;
        }

        .success-page::before {
            width: 260px;
            height: 260px;
            top: 80px;
            right: -80px;
            background: rgba(52, 165, 89, 0.10);
        }

        .success-page::after {
            width: 220px;
            height: 220px;
            bottom: -60px;
            left: -60px;
            background: rgba(11, 76, 140, 0.10);
        }

        .success-wrap {
            position: relative;
            z-index: 1;
        }

        .success-card {
            max-width: 760px;
            margin: 0 auto;
            padding: 56px 44px;
            text-align: center;
            border-radius: 28px;
            background: rgba(255, 255, 255, 0.96);
            border: 1px solid rgba(52, 165, 89, 0.12);
            box-shadow: 0 28px 60px rgba(17, 24, 39, 0.10);
        }

        .success-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 18px;
            border-radius: 999px;
            background: rgba(52, 165, 89, 0.10);
            color: #1f7a3f;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .success-icon-wrap {
            width: 124px;
            height: 124px;
            margin: 28px auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: linear-gradient(135deg, #e8fff0 0%, #f8fffb 100%);
            box-shadow: inset 0 0 0 10px rgba(52, 165, 89, 0.05);
        }

        .success-icon-wrap img {
            width: 72px;
            height: 72px;
            object-fit: contain;
        }

        .success-title {
            margin: 0 0 14px;
            color: #10213a;
            font-size: 42px;
            font-weight: 800;
            line-height: 1.15;
        }

        .success-text {
            max-width: 560px;
            margin: 0 auto;
            color: #5b6473;
            font-size: 18px;
            line-height: 1.8;
        }

        .success-note {
            margin-top: 22px;
            padding: 15px 18px;
            border-radius: 16px;
            background: #f4fbf6;
            color: #2a6840;
            font-size: 16px;
            font-weight: 600;
        }

        .success-actions {
            margin-top: 34px;
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        .success-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 170px;
            padding: 14px 24px;
            border-radius: 14px;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .success-btn-primary {
            color: #fff;
            background: linear-gradient(135deg, #34A559 0%, #228446 100%);
            box-shadow: 0 14px 30px rgba(52, 165, 89, 0.24);
        }

        .success-btn-primary:hover {
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 18px 34px rgba(52, 165, 89, 0.30);
        }

        .success-btn-secondary {
            color: #14335c;
            background: #fff;
            border: 1px solid rgba(20, 51, 92, 0.14);
        }

        .success-btn-secondary:hover {
            color: #14335c;
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(20, 51, 92, 0.10);
        }

        @media only screen and (max-width: 991px) {
            .success-page {
                padding: 145px 0 70px;
            }

            .success-card {
                padding: 46px 28px;
            }

            .success-title {
                font-size: 34px;
            }
        }

        @media only screen and (max-width: 575px) {
            .success-page {
                padding: 125px 0 56px;
            }

            .success-card {
                padding: 36px 22px;
                border-radius: 22px;
            }

            .success-icon-wrap {
                width: 106px;
                height: 106px;
                margin: 22px auto 20px;
            }

            .success-icon-wrap img {
                width: 62px;
                height: 62px;
            }

            .success-title {
                font-size: 28px;
            }

            .success-text {
                font-size: 16px;
                line-height: 1.7;
            }

            .success-note {
                font-size: 15px;
            }

            .success-actions {
                gap: 12px;
            }

            .success-btn {
                width: 100%;
            }
        }
    </style>
</head>
<?php include 'navbar.php'; ?>

<section class="success-page">
    <div class="container success-wrap">
        <div class="success-card">
            <span class="success-badge">Message Delivered</span>

            <div class="success-icon-wrap">
                <img src="success.png" alt="Success icon">
            </div>

            <h1 class="success-title">Your email has been sent successfully</h1>
            <p class="success-text">
                Thank you for reaching out to us. We have received your message and our team will review it shortly.
            </p>

            <div class="success-note">
                Our representative will call you shortly.
            </div>

            <div class="success-actions">
                <a href="https://technofra.com/" class="success-btn success-btn-primary">Back To Home</a>
                <a href="contact" class="success-btn success-btn-secondary">Contact Again</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
