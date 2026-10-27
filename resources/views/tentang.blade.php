@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<style>
    .tentang {
        background: #101326;
        color: white;
        font-family: Arial, sans-serif;
        padding-bottom: 70px;
    }

    .tentang-hero {
        padding: 80px 8%;
        text-align: center;
        background: linear-gradient(135deg, #191632, #28204d);
    }

    .tentang-hero .label {
        color: #b7a8ff;
        font-size: 13px;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .tentang-hero h1 {
        font-size: 45px;
        margin: 20px 0;
    }

    .tentang-hero h1 span {
        color: #9580ff;
    }

    .tentang-hero p {
        max-width: 700px;
        margin: auto;
        color: #c0c2d6;
        line-height: 1.9;
        font-size: 15px;
    }

    .tentang-profil {
        max-width: 1100px;
        margin: auto;
        padding: 65px 30px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }
