<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pinterest-red: #e60023;
            --pinterest-black: #111111;
            --pinterest-dark-gray: #2c2c2c;
            --pinterest-light-gray: #767676;
            --pinterest-white: #FFFFFF;
            --nav-height: 64px;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--pinterest-black);
            color: var(--pinterest-white);
            line-height: 1.5;
        }

        .container {
            min-height: 100vh;
            padding: 2rem 8%;
            background: linear-gradient(180deg, #1a0f0f 0%, var(--pinterest-black) 25%);
        }

        .contact-wrapper {
            max-width: 1200px;
            margin: 4rem auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            padding: 2rem;
            background: var(--pinterest-dark-gray);
            border-radius: 32px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .contact-info {
            padding: 2rem;
        }

        .contact-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--pinterest-white);
            position: relative;
            display: inline-block;
        }

        .contact-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 60px;
            height: 3px;
            background: var(--pinterest-red);
            border-radius: 2px;
        }

        .contact-description {
            color: var(--pinterest-light-gray);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .contact-items {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.2rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            transition: all var(--transition-speed) ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .contact-item:hover {
            transform: translateY(-5px);
            background: rgba(230, 0, 35, 0.1);
            border-color: var(--pinterest-red);
        }

        .contact-item i {
            font-size: 1.5rem;
            color: var(--pinterest-red);
        }

        .contact-form {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--pinterest-light-gray);
            font-weight: 500;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 1rem;
            background: var(--pinterest-black);
            border: 2px solid var(--pinterest-dark-gray);
            border-radius: 16px;
            color: var(--pinterest-white);
            font-family: 'Poppins', sans-serif;
            transition: all var(--transition-speed) ease;
        }

        .form-textarea {
            min-height: 150px;
            resize: vertical;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--pinterest-red);
            background: rgba(230, 0, 35, 0.05);
        }

        .submit-button {
            background: var(--pinterest-red);
            color: var(--pinterest-white);
            padding: 1rem 2rem;
            border: none;
            border-radius: 24px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all var(--transition-speed) ease;
        }

        .submit-button:hover {
            background: #cc0000;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(230, 0, 35, 0.3);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--pinterest-dark-gray);
            border-radius: 16px;
            transition: all var(--transition-speed) ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .social-link:hover {
            background: var(--pinterest-red);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(230, 0, 35, 0.2);
        }

        .social-link i {
            color: var(--pinterest-white);
            font-size: 1.2rem;
        }

        .message-alert {
            padding: 1rem;
            border-radius: 16px;
            margin-bottom: 1.5rem;
            text-align: center;
            font-weight: 500;
        }

        .success-message {
            background: rgba(46, 204, 113, 0.1);
            color: #2ecc71;
            border: 1px solid #2ecc71;
        }

        .error-message {
            background: rgba(231, 76, 60, 0.1);
            color: #e74c3c;
            border: 1px solid #e74c3c;
        }

        @media (max-width: 992px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem 4%;
            }

            .contact-title {
                font-size: 2rem;
            }

            .contact-wrapper {
                margin: 2rem auto;
                padding: 1rem;
            }

            .contact-info,
            .contact-form {
                padding: 1rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="contact-wrapper">
            <?php if(isset($_GET['status'])): ?>
                <?php if($_GET['status'] == 'success'): ?>
                    <div class="message-alert success-message">
                        <i class="fas fa-check-circle"></i> Pesan Anda telah berhasil dikirim!
                    </div>
                <?php elseif($_GET['status'] == 'error'): ?>
                    <div class="message-alert error-message">
                        <i class="fas fa-exclamation-circle"></i> Maaf, terjadi kesalahan. Silakan coba lagi.
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <div class="contact-info">
                <h1 class="contact-title">Hubungi Kami</h1>
                <p class="contact-description">Ada pertanyaan atau saran? Jangan ragu untuk menghubungi kami. Kami siap membantu Anda mengeksplorasi kuliner nusantara.</p>

                <div class="contact-items">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Lokasi</h3>
                            <p>Jl. Kuliner Nusantara No. 123, Bandung</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Telepon</h3>
                            <p>+62 857-1543-7442</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@kulinernusantara.com</p>
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="contact-form">
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-input" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-input" name="email" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Subjek</label>
                        <input type="text" class="form-input" name="subjek" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-textarea" name="pesan" required></textarea>
                    </div>

                    <button type="submit" class="submit-button">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>