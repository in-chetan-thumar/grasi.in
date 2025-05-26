@extends('llumar.layouts.master') {{-- Or your base layout --}}
@section('title')
  Thank You - Llumar
@endsection

@section('content')
<style>
    body {
        background-color: #000;
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
    }

    .thankyou-container {
        position: relative;
        height: 100vh;
        background: url('{{ asset("images/thankyou-bg.jpg") }}') no-repeat center center / cover;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 2rem;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(15, 15, 15, 0.8));
        z-index: 1;
    }

    .thankyou-card {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #fff;
        max-width: 1000px;
        width: 100%;
        padding: 4rem 3rem;
        background: rgba(0, 0, 0, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 2.5rem;
        box-shadow: 0 0 60px rgba(255, 215, 0, 0.15);
        backdrop-filter: blur(12px);
        animation: fadeInUp 1.2s ease;
    }

  .thankyou-card h1 {
    font-size: 3.2rem;
    margin-bottom: 1.5rem;
    font-weight: 800;
    background: linear-gradient(to right, #ff512f, #f09819); /* gradient like image */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: transparent;
}

    .thankyou-card p {
        font-size: 1.4rem;
        color: #ddd;
        line-height: 1.8;
        margin-bottom: 2.5rem;
    }

    .thankyou-card a {
        display: inline-block;
        padding: 0.9rem 2.5rem;
         background: linear-gradient(to right, #ff512f, #f09819); /* gradient like image */
        color: #000;
        font-weight: 600;
        text-decoration: none;
        border-radius: 50px;
        transition: 0.3s ease;
        font-size: 1.1rem;
    }

    .thankyou-card a:hover {
        transform: scale(1.05);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(60px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .thankyou-card {
            padding: 3rem 1.5rem;
        }

        .thankyou-card h1 {
            font-size: 2.2rem;
        }

        .thankyou-card p {
            font-size: 1.1rem;
        }
    }
</style>

<div class="thankyou-container">
    <div class="overlay"></div>
    <div class="thankyou-card">
        <h1>Thank You!</h1>
        <p>
            Thank you for filling out the form.<br>
            Our team will connect with you shortly.<br><br>
        </p>
        <a href="{{ url('/') }}">Back to Home</a>
    </div>
</div>
@endsection
