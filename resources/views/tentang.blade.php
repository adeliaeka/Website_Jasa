@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<style>
    .tentang {
        background: #101326;
        color: #fff;
        font-family: Arial, sans-serif;
        overflow: hidden;
    }

    /* HERO SECTION */
    .about-hero {
        position: relative;
        padding: 110px 8%;
        text-align: center;
        background:
            radial-gradient(circle at 20% 20%, #7657ff35, transparent 35%),
            radial-gradient(circle at 80% 80%, #9580ff25, transparent 30%),
            linear-gradient(135deg, #191632, #28204d);
    }

    .about-hero::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border: 1px solid #9580ff30;
        border-radius: 50%;
        top: -150px;
        right: -80px;
    }
.hero-label {
        display: inline-block;
        color: #c0b3ff;
        background: #9580ff20;
        border: 1px solid #9580ff50;
        padding: 10px 22px;
        border-radius: 30px;
        font-size: 12px;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .about-hero h1 {
        font-size: 52px;
        margin: 25px 0 18px;
        line-height: 1.2;
    }

    .about-hero h1 span {
        color: #a995ff;
    }

    .about-hero p {
        max-width: 700px;
        margin: auto;
        color: #c0c2d6;
        line-height: 1.9;
        font-size: 15px;
    }

    .hero-button {
        display: inline-block;
        margin-top: 30px;
        padding: 14px 28px;
        background: #7657ff;
        color: white;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
        transition: .3s;
    }

    .hero-button:hover {
        background: #9580ff;
        transform: translateY(-4px);
    }

    /* PROFIL */
    .about-profile {
        max-width: 1150px;
        margin: auto;
        padding: 90px 30px;
        display: grid;
        grid-template-columns: 1.1fr .9fr;
        gap: 65px;
        align-items: center;
    }

    .section-label {
        color: #a995ff;
        font-size: 12px;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .profile-text h2 {
        font-size: 36px;
        margin: 18px 0;
    }

    .profile-text h2 span {
        color: #a995ff;
    }

    .profile-text p {
        color: #b9bdd2;
        font-size: 14px;
        line-height: 2;
        text-align: justify;
        margin-bottom: 17px;
    }

    .profile-visual {
        position: relative;
        padding: 45px 30px;
        border-radius: 25px;
        text-align: center;
        background: linear-gradient(145deg, #302858, #191a31);
        border: 1px solid #9580ff45;
        box-shadow: 0 15px 45px #00000040;
    }

    .profile-visual .big-icon {
        font-size: 90px;
        margin-bottom: 20px;
    }

    .profile-visual h3 {
        color: #b5a4ff;
        font-size: 28px;
        margin-bottom: 12px;
    }