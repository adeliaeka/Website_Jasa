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
