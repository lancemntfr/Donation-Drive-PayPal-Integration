<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EarthPaws Foundation - Support Animal Rescue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8fafb;
            color: #2c3e50;
        }

        /* Header & Navigation */
        header {
            background: linear-gradient(135deg, #2d7a5e 0%, #1f5437 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        header .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        header .navbar-brand i {
            font-size: 1.8rem;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255,255,255,0.8);
            transition: color 0.3s ease;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #a8e6d4;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #2d7a5e 0%, #1f5437 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* About Section */
        .about-section {
            padding: 60px 0;
            background: white;
        }

        .about-section h2 {
            font-size: 2.5rem;
            color: #2d7a5e;
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .about-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .impact-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .impact-card {
            background: linear-gradient(135deg, #a8e6d4 0%, #7dd4c2 100%);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(45, 122, 94, 0.15);
            transition: transform 0.3s ease;
        }

        .impact-card:hover {
            transform: translateY(-5px);
        }

        .impact-card i {
            font-size: 2.5rem;
            color: #1f5437;
            margin-bottom: 1rem;
        }

        .impact-card h4 {
            color: #1f5437;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .impact-card p {
            color: #2c3e50;
            margin: 0;
            font-size: 0.95rem;
        }

        /* Donation Section */
        .donation-section {
            padding: 60px 0;
            background: #f8fafb;
        }

        .donation-section h2 {
            font-size: 2.5rem;
            color: #2d7a5e;
            margin-bottom: 2rem;
            text-align: center;
            font-weight: 700;
        }

        .donation-form-container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(45, 122, 94, 0.1);
        }

        .form-group label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.8rem;
        }

        .form-group input {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 0.75rem;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #2d7a5e;
            box-shadow: 0 0 0 3px rgba(45, 122, 94, 0.1);
            outline: none;
        }

        .currency-info {
            background: #f0f8f5;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
            border-left: 4px solid #2d7a5e;
        }

        .currency-info p {
            margin: 0;
            color: #2c3e50;
            font-size: 0.95rem;
        }

        .exchange-rate {
            color: #2d7a5e;
            font-weight: 600;
        }

        .usd-conversion {
            background: #e8f4f0;
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1rem;
            text-align: center;
            border: 2px solid #a8e6d4;
        }

        .usd-conversion p {
            margin: 0.25rem 0;
            color: #2c3e50;
            font-size: 0.95rem;
        }

        .usd-amount {
            font-size: 1.8rem;
            color: #2d7a5e;
            font-weight: 700;
        }

        .donation-presets {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.75rem;
            margin: 1.5rem 0;
        }

        .preset-btn {
            background: #f0f8f5;
            border: 2px solid #a8e6d4;
            color: #2d7a5e;
            padding: 0.75rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .preset-btn:hover {
            background: #a8e6d4;
            border-color: #2d7a5e;
        }

        .preset-btn.active {
            background: #2d7a5e;
            color: white;
            border-color: #2d7a5e;
        }

        #paypal-button-container {
            margin-top: 1.5rem;
        }

        /* Footer */
        footer {
            background: #1f5437;
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-top: 4rem;
        }

        footer p {
            margin: 0;
        }

        .footer-links {
            margin: 1rem 0;
        }

        .footer-links a {
            color: #a8e6d4;
            text-decoration: none;
            margin: 0 1rem;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .about-section h2,
            .donation-section h2 {
                font-size: 1.8rem;
            }

            .donation-form-container {
                padding: 1.5rem;
            }

            .impact-cards {
                grid-template-columns: 1fr;
            }
        }

        .loading {
            display: none;
            text-align: center;
            padding: 2rem;
            color: #2d7a5e;
        }

        .loading.show {
            display: block;
        }

        .spinner-border {
            color: #2d7a5e;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#home">
                    <i class="fas fa-paw"></i>
                    EarthPaws Foundation
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#donate">Donate</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Help Us Save Animals</h1>
            <p>Support EarthPaws Foundation in our mission to rescue, rehabilitate, and protect animals in need across the Philippines.</p>
            <a href="#donate" class="btn btn-light btn-lg">
                <i class="fas fa-heart"></i> Make a Donation
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>About EarthPaws Foundation</h2>
                    <p>EarthPaws Foundation is dedicated to protecting and caring for animals in the Philippines. Our mission is to rescue abandoned animals, provide medical care, and find them loving homes.</p>
                    <p>Since our establishment, we have saved over 5,000 animals and continue to expand our reach to remote communities across the country. Every donation directly supports our rescue operations and animal welfare programs.</p>
                </div>
                <div class="col-lg-6">
                    <div class="impact-cards">
                        <div class="impact-card">
                            <i class="fas fa-heart"></i>
                            <h4>5000+</h4>
                            <p>Animals Rescued</p>
                        </div>
                        <div class="impact-card">
                            <i class="fas fa-hospital"></i>
                            <h4>99%</h4>
                            <p>Recovery Rate</p>
                        </div>
                        <div class="impact-card">
                            <i class="fas fa-home"></i>
                            <h4>4500+</h4>
                            <p>Animals Rehomed</p>
                        </div>
                        <div class="impact-card">
                            <i class="fas fa-users"></i>
                            <h4>1200+</h4>
                            <p>Active Volunteers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section class="donation-section" id="donate">
        <div class="container">
            <h2>Make a Difference</h2>
            <div class="donation-form-container">
                <div class="currency-info">
                    <p>💰 <span class="exchange-rate">Donate in Philippine Peso (PHP)</span></p>
                    <p style="font-size: 0.85rem; margin-top: 0.5rem;">Your donation will be converted to USD for PayPal processing</p>
                </div>

                <form id="donationForm">
                    <div class="form-group">
                        <label for="donationAmount">Donation Amount (PHP)</label>
                        <input 
                            type="number" 
                            class="form-control" 
                            id="donationAmount" 
                            placeholder="Enter amount in PHP"
                            min="100"
                            step="50"
                            value="500"
                            required
                        >
                    </div>

                    <div class="donation-presets">
                        <button type="button" class="preset-btn" onclick="setDonation(500)">₱500</button>
                        <button type="button" class="preset-btn" onclick="setDonation(1000)">₱1,000</button>
                        <button type="button" class="preset-btn" onclick="setDonation(2500)">₱2,500</button>
                        <button type="button" class="preset-btn" onclick="setDonation(5000)">₱5,000</button>
                    </div>

                    <div class="usd-conversion">
                        <p>Equivalent in USD:</p>
                        <p class="usd-amount">$<span id="usdAmount">10.00</span></p>
                        <p style="font-size: 0.85rem; margin-top: 0.5rem;">≈ ₱<span id="phpDisplay">500</span></p>
                    </div>

                    <div class="form-group">
                        <label for="donorName">Your Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="donorName" 
                            placeholder="Enter your name"
                        >
                    </div>

                    <div class="form-group">
                        <label for="donorEmail">Your Email</label>
                        <input 
                            type="email" 
                            class="form-control" 
                            id="donorEmail" 
                            placeholder="Enter your email"
                        >
                    </div>
                </form>

                <div id="paypal-button-container"></div>
                <div class="loading" id="loadingSpinner">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p>Processing donation...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="donation-section" id="contact" style="background: white;">
        <div class="container">
            <h2>Get in Touch</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="fas fa-phone fa-2x" style="color: #2d7a5e; margin-bottom: 1rem;"></i>
                    <h4>Phone</h4>
                    <p>+63 (2) 1234-5678</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-envelope fa-2x" style="color: #2d7a5e; margin-bottom: 1rem;"></i>
                    <h4>Email</h4>
                    <p>info@earthpawsph.org</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-map-marker-alt fa-2x" style="color: #2d7a5e; margin-bottom: 1rem;"></i>
                    <h4>Address</h4>
                    <p>Manila, Philippines</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 EarthPaws Foundation. All rights reserved.</p>
            <div class="footer-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p style="font-size: 0.9rem; margin-top: 1rem; opacity: 0.9;">Helping animals, one paw at a time 🐾</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AY6u4H6soXFMgZnUAuF6THuqPVIDeVmJ8X-bOXz-ZIwLAdeiJKyluuEtEmpKdS-I2zTD3aviw4EQHuPz&currency=USD"></script>

    <script>
        // Exchange rate: 1 USD = ~50 PHP (adjust as needed)
        const EXCHANGE_RATE = 50;

        // Update USD conversion display
        function updateConversion() {
            const phpAmount = parseFloat(document.getElementById('donationAmount').value) || 0;
            const usdAmount = (phpAmount / EXCHANGE_RATE).toFixed(2);
            document.getElementById('usdAmount').textContent = usdAmount;
            document.getElementById('phpDisplay').textContent = phpAmount.toLocaleString();
        }

        // Set donation from preset buttons
        function setDonation(amount) {
            document.getElementById('donationAmount').value = amount;
            updateConversion();
            updatePresetButtons(amount);
        }

        // Update preset button active state
        function updatePresetButtons(amount) {
            document.querySelectorAll('.preset-btn').forEach(btn => {
                btn.classList.remove('active');
                if (parseInt(btn.textContent.replace(/[^0-9]/g, '')) === amount) {
                    btn.classList.add('active');
                }
            });
        }

        // Event listeners
        document.getElementById('donationAmount').addEventListener('input', updateConversion);
        document.getElementById('donationAmount').addEventListener('change', function() {
            updatePresetButtons(parseFloat(this.value));
        });

        // Initialize conversion on page load
        updateConversion();

        // PayPal Button Integration
        paypal.Buttons({
            createOrder: function() {
                const phpAmount = parseFloat(document.getElementById('donationAmount').value);
                const donorName = document.getElementById('donorName').value || 'Anonymous Donor';
                const donorEmail = document.getElementById('donorEmail').value || '';

                if (!phpAmount || phpAmount < 100) {
                    alert('Please enter a donation amount of at least ₱100');
                    return;
                }

                const usdAmount = (phpAmount / EXCHANGE_RATE).toFixed(2);

                // Show loading spinner
                document.getElementById('loadingSpinner').classList.add('show');

                return fetch("paypal.php?action=create", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        amount: usdAmount,
                        phpAmount: phpAmount,
                        donorName: donorName,
                        donorEmail: donorEmail
                    })
                })
                .then(res => res.json())
                .then(data => {
                    document.getElementById('loadingSpinner').classList.remove('show');
                    if (data.error) {
                        alert('Error: ' + data.error);
                        return;
                    }
                    return data.id;
                })
                .catch(error => {
                    document.getElementById('loadingSpinner').classList.remove('show');
                    alert('Error creating order: ' + error.message);
                });
            },

            onApprove: function(data) {
                document.getElementById('loadingSpinner').classList.add('show');

                return fetch("paypal.php?action=capture", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        orderID: data.orderID
                    })
                })
                .then(res => res.json())
                .then(details => {
                    document.getElementById('loadingSpinner').classList.remove('show');
                    const phpAmount = parseFloat(document.getElementById('donationAmount').value);
                    alert('🎉 Thank you for your donation of ₱' + phpAmount.toLocaleString() + '!\n\nYour generosity will help us save more animals. God bless your kind heart!');
                    document.getElementById('donationForm').reset();
                    updateConversion();
                    location.reload();
                })
                .catch(error => {
                    document.getElementById('loadingSpinner').classList.remove('show');
                    alert('Error capturing payment: ' + error.message);
                });
            },

            onError: function(err) {
                document.getElementById('loadingSpinner').classList.remove('show');
                alert('Payment error: ' + err.message);
            }

        }).render('#paypal-button-container');
    </script>

</body>
</html>