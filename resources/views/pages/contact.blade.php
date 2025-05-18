@extends('layouts.layout')
@section('content')
    <main>
        <!-- Page title -->
        <section class="contact-header">
            <div class="container">
                <h1 class="contact-title">Contact</h1>
            </div>
        </section>

        <!-- Contact form -->
        <section class="contact-form-section">
            <div class="container">
                @if(session('success'))
                    <div class="alert alert-success" id="alert-message">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger" id="alert-message">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="/contact" method="post" class="contact-form">
                    @csrf
                    <div class="form-group-row">
                        <div class="form-group">
                            <label for="contact-name">Name *</label>
                            <input type="text" id="contact-name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email *</label>
                            <input type="email" id="contact-email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-phone">Phone Number</label>
                        <input type="tel" id="contact-phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Message *</label>
                        <textarea id="contact-message" name="message" rows="7" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="submit-button">Send &rAarr;</button>
                </form>
            </div>
        </section>
    </main>

    <script>
        // Function to hide alert messages after 4 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alertMessage = document.getElementById('alert-message');
            if (alertMessage) {
                setTimeout(function() {
                    alertMessage.style.opacity = '0';
                    setTimeout(function() {
                        alertMessage.style.display = 'none';
                    }, 300);
                }, 4000);
            }
        });
    </script>
@endsection
