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
    .profile-visual p {
        color: #c0c2d6;
        line-height: 1.8;
        font-size: 14px;
    }

    .profile-tag {
        display: inline-block;
        margin-top: 22px;
        background: #7657ff30;
        color: #c7bbff;
        padding: 9px 18px;
        border-radius: 30px;
        font-size: 12px;
    }

    /* LAYANAN */
    .about-services {
        padding: 85px 8%;
        background: #171a30;
    }

    .section-heading {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-heading h2 {
        font-size: 34px;
        margin: 15px 0;
    }

    .section-heading h2 span {
        color: #a995ff;
    }

    .section-heading p {
        color: #b9bdd2;
        font-size: 14px;
        line-height: 1.8;
    }

    .service-grid {
        max-width: 1150px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .service-card {
        padding: 30px 25px;
        background: linear-gradient(145deg, #252846, #1d203a);
        border: 1px solid #ffffff15;
        border-radius: 18px;
        transition: .35s;
    }

    .service-card:hover {
        transform: translateY(-8px);
        border-color: #9580ff;
        box-shadow: 0 12px 30px #7657ff20;
    }

    .service-icon {
        width: 58px;
        height: 58px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #7657ff25;
        border-radius: 15px;
        font-size: 29px;
        margin-bottom: 22px;
    }

    .service-card h3 {
        color: #c1b3ff;
        font-size: 19px;
        margin-bottom: 12px;
    }

    .service-card p {
        color: #b9bdd2;
        font-size: 13px;
        line-height: 1.8;
    }

    /* VISI MISI */
    .about-values {
        padding: 85px 8%;
    }

    .values-grid {
        max-width: 1150px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .value-card {
        background: linear-gradient(145deg, #292449, #191a31);
        padding: 32px 25px;
        border-radius: 18px;
        border: 1px solid #ffffff18;
        transition: .3s;
    }

    .value-card:hover {
        transform: translateY(-7px);
        border-color: #9580ff;
    }
